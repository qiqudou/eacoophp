<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018.7.14
 * Time: 2:31
 */
namespace app\micro_topics\admin;
use app\admin\controller\Admin;
use app\common\model\User as UserModel;
use app\micro_topics\model\MicroTopicsUsers as MTUserModel;

class Users extends Admin {


    protected $UserModel;
    protected $MTUserModel;

    function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        $this->UserModel = new UserModel();
        $this->MTUserModel = new MTUserModel();
    }


    /*
     *  用户列表
     *  2018-7-14
     *  yyyvy
     * */
    public function index(){
        // 搜索
        $keyword = input('param.keyword');
        if ($keyword) {
            $this->MTUserModel->where('id|title','like','%'.$keyword.'%');
        }


        list($data_list,$total) = $this->MTUserModel->search('title') //添加搜索查询
                                ->getListByPage([],true,'create_time desc');

        //遍历数据的分类
        foreach($data_list as $row){
            $userinfo = $this->UserModel->where('uid',$row['uid'])->find();
            $row['nickname'] = $userinfo['nickname'];
            $row['role_text'] = $row['role_text'];
            $row['vip_text'] = $row['vip_text'];
            $row['author_text'] = $row['author_text'];

        }

        //print_r($data_list);die;

        return builder('List')
            ->setMetaTitle('会员列表') // 设置页面标题
            ->setSearch('输入关键字','')
            ->keyListItem('id', 'ID')
            ->keyListItem('uid','用户UID')
            ->keyListItem('nickname','用户名')
            ->keyListItem('level', '等级')
            ->keyListItem('role_text', '角色')
            ->keyListItem('vip_text', 'VIP')
            ->keyListItem('author_text', '认证')
            ->keyListItem('level_integration', '等级积分')
            ->keyListItem('vip_integration', '会员积分')
            ->keyListItem('right_button', '操作', 'btn')
            ->setListData($data_list)    // 数据列表
            ->setListPage($total) // 数据列表分页
            ->addRightButton('edit')
            ->addRightButton('recycle',['model'=>'micro_topics'])
            ->fetch();
    }


    /*
     *  用户编辑
     *  2018-7-14
     *  yyyvy
     * */
    public function edit($id){
        $title = $id>0 ? "编辑":"新增";

        //修改
        if(IS_POST){
            $data = $this->request->param();
            $data['vip_start_time'] = strtotime($data['vip_start_time']);
            $data['vip_end_time'] = strtotime($data['vip_end_time']);
            //如果VIP结束时间大于等于明天的0点，那么就设置VIP标识为1
            if($data['vip_end_time'] >= strtotime(date('Y-m-d',strtotime('+1 day')))){
                if($data['vip'] == 0){
                    $data['vip'] = 1;
                }
            }
            $result = $this->MTUserModel->editData($data);
            if($result){
                $this ->success($title.'成功','');
            } else{
                $this ->error($this->MTUserModel->getError());
            }

        } else{

            $this->assign('page_config',['disable_panel'=>true]);
            $this->assign('meta_title',$title.'会员');

            $info = $this->MTUserModel->get($id);
            $info['nickname'] = $this->UserModel->where('uid',$info['uid'])->value('nickname');

            $this->assign('info',$info);
            $this->assign('form_url',url('edit',['id'=>$id]));
            return $this->fetch();
        }
    }

}