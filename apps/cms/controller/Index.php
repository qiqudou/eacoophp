<?php
// cms前台
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2018 https://www.eacoophp.com, All rights reserved.         
// +----------------------------------------------------------------------
// | [EacooPHP] 并不是自由软件,可免费使用,未经许可不能去掉EacooPHP相关版权。
// | 禁止在EacooPHP整体或任何部分基础上发展任何派生、修改或第三方版本用于重新分发
// +----------------------------------------------------------------------
// | Author:  心云间、凝听 <981248356@qq.com>
// +----------------------------------------------------------------------
namespace app\cms\controller;
use app\home\controller\Home;

use app\cms\model\Posts as PostsModel;
use app\cms\logic\Category as CategoryLogic;
use app\cms\logic\Tag as TagLogic;

class Index extends Home {

	function _initialize()
    {
        parent::_initialize();

        $this->assign('category_list',CategoryLogic::getCategories());
        $this->assign('tag_list',TagLogic::getTags());
    }   

    /**
     * 首页
     */
    public function index() {

        $this->pageInfo('首页','index');
        
        $map = [
            'status' =>1,
            'type'   =>'post'
        ];
        //分类筛选
        $cat_id = input('param.cat_id');
        if ($cat_id>0) {
            $cat_post_ids = db('term_relationships')->where(['term_id'=>$cat_id])->column('object_id');
            if(!empty($cat_post_ids)) $map['id']=['in',$cat_post_ids];
        }
        //标签筛选
        $tag_id = input('param.tag_id');
        if ($tag_id>0) {
            $tag_post_ids = db('term_relationships')->where(['term_id'=>$tag_id])->column('object_id');
            if(!empty($tag_post_ids)){
                $map['id']=['in',$tag_post_ids];
            } elseif (empty($map['id'])) {
                $map['id']='';
            }
        }
        if (!empty($cat_post_ids) && !empty($tag_post_ids)) {
            $ids = array_unique(array_merge($cat_post_ids,$tag_post_ids));
            $map['id']=['in',$ids];
        }
        $post_list = PostsModel::where($map)->order('sort desc,create_time desc,id desc')->paginate(15);

        $this->assign('post_list',$post_list);

        return $this->fetch();
    }

    /**
     * 获取详情
     * @param  integer $id [description]
     * @return [type] [description]
     * @date   2017-10-16
     * @author 心云间、凝听 <981248356@qq.com>
     */
    public function detail($id=0)
    {
        $info = PostsModel::get($id);

        $this->pageInfo($info['title'],'detail');
        $this->assign('info',$info);

        return $this->fetch();
    }

}