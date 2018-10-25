<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/24
 * Time: 18:21
 */
namespace app\micro_topics\admin;

use app\admin\controller\Admin;
use app\common\model\Terms as TermsModel;
use eacoo\Tree;
use app\micro_topics\model\MicroTopics as ListModel;

class Category extends Admin {


    protected $termsModel;
    protected $ListModel;

    function _initialize()
    {
        parent::_initialize();
        $this->termsModel = new TermsModel();
        $this->ListModel = new ListModel();
    }



    /*
     * 分类列表
     * 2018-6-24
     * yyyvy
     * */
    public function index($taxonomy='micro_topics'){
        $map =[
            'taxonomy'=>$taxonomy
        ];

        list($data_list,$total) = $this->termsModel->search('title') //添加搜索查询
                                ->getListByPage($map,true,'sort desc,create_time desc');


        if (!empty($data_list)) {
            foreach ($data_list as $key => &$row) {
                $row['object_count'] = $this->ListModel->where('category_id',$row['term_id'])->count();
            }
        }

        return  builder('List')
            ->setMetaTitle('分类管理') // 设置页面标题
            ->addTopButton('addnew',['href'=>url('edit',['taxonomy'=>$taxonomy])])  // 添加新增按钮
            ->addTopButton('resume')  // 添加启用按钮
            ->addTopButton('forbid')  // 添加禁用按钮
            ->addTopButton('recycle') //添加回收按钮
            ->setSearch('输入分类名称', url('index'))
            ->keyListItem('term_id', 'ID')
            ->keyListItem('name', '名称','link',url('index',['term_id'=>'__data_id__']))//约定分类对象
            ->keyListItem('slug', '别名')
            ->keyListItem('parent', '父分类')
            ->keyListItem('object_count', '对象数')
            ->keyListItem('status', '状态', 'status')
            ->keyListItem('right_button', '操作', 'btn')
            ->setListPrimaryKey('term_id')
            ->setListData($data_list)    // 数据列表
            ->setListPage($total) // 数据列表分页
            ->addRightButton('edit',['href'=>url('edit',['term_id'=>'__data_id__','taxonomy'=>$taxonomy])])// 添加编辑按钮
            ->addRightButton('recycle')// 添加删除按钮
            ->fetch();

    }



    /**
     * 分类编辑
     * @param  integer $id [description]
     * @param  string $taxonomy [description]
     * @return [type] [description]
     * @date   2018-6-24
     * @author yyyvy <76836785@qq.com>
     */
    public function edit($term_id=0,$taxonomy='micro_topics'){

        $title = $term_id>0 ? "编辑" : "新增";
        if (IS_POST) {
            // 提交数据
            $data = $this->request->param();
            $data['taxonomy'] = $taxonomy;
            //验证数据
            $this->validateData($data,
                [
                    ['name','require|chsDash','分类名称不能为空|分类名称只能是汉字和字母'],
                    ['taxonomy','require|alphaDash','描述只能是汉字字母数字|分类法名称只能是字母和数字，下划线符合']
                ]);

            $result = $this->termsModel->editData($data);
            if ($result) {
                $this->success($title.'成功', url('index',['taxonomy'=>$taxonomy]));
            } else {
                $this->error($this->termsModel->getError());
            }

        } else {
            $info = [];
            if ($term_id>0) {
                $info = TermsModel::get($term_id);
            }
            $p_terms = TermsModel::where(['taxonomy'=>$taxonomy])->select();
            if ($p_terms) {
                $p_terms = collection($p_terms)->toArray();
                $tree_obj = new Tree;
                $p_terms = $tree_obj->toFormatTree($p_terms,'name','term_id');
            }

            if(!empty($p_terms)){
                foreach ($p_terms as $key => $term) {
                    $p_terms[$key]['id']= $term['term_id'];
                }
            }else{
                $p_terms = array();
            }

            $termTaxonomy = config('term_taxonomy');//获取所有分类法
            $p_terms = array_merge([0=>['id'=>0,'title_show'=>'顶级菜单']], $p_terms);


            return builder('Form')
                ->setMetaTitle($title.'分类')  // 设置页面标题
                ->addFormItem('term_id', 'hidden', 'ID', 'ID')
                ->addFormItem('name', 'text', '分类名称', '分类名称','','require')
                ->addFormItem('slug', 'text', '分类别名', '分类别名','','require')
                ->addFormItem('taxonomy', 'select', '分类类型', '选择一个分类法',$termTaxonomy)
                ->addFormItem('pid', 'multilayer_select', '上级分类', '上级分类',$p_terms)
                ->setFormData($info)
                ->fetch();
        }
    }

}