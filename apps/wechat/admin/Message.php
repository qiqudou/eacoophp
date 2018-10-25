<?php
// 消息
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2018 http://www.eacoo123.com, All rights reserved.         
// +----------------------------------------------------------------------
// | [EacooPHP] 并不是自由软件,可免费使用,未经许可不能去掉EacooPHP相关版权。
// | 禁止在EacooPHP整体或任何部分基础上发展任何派生、修改或第三方版本用于重新分发
// +----------------------------------------------------------------------
// | Author:  心云间、凝听 <981248356@qq.com>
// +----------------------------------------------------------------------
namespace app\wechat\admin;

use app\wechat\model\Message as MessageModel;

class Message extends Base {

    protected $messageModel;
    function _initialize()
    {
        parent::_initialize();
        $this->messageModel = new MessageModel();
    }

    //消息管理
    public function index(){
        $data_list = $this->messageModel->alias('a')->join('__WECHAT_USER__ w','a.fromusername = w.openid1')->field('a.*,w.headimgurl,w.nickname')->paginate(20);

         return  builder('list')
                ->setMetaTitle('消息列表') // 设置页面标题
                ->addTopBtn('delete',array('title'=>'删除消息')) //添加删除按钮
                ->keyListItem('MsgType', '消息类型')
                ->keyListItem('Content', '消息内容')
                ->keyListItem('CreateTime', '发送时间','time')
                ->keyListItem('headimgurl', '粉丝头像','avatar')
                ->keyListItem('nickname', '粉丝昵称')
                ->keyListItem('right_button', '操作', 'btn')
                ->setListData($data_list)    // 数据列表
                ->setListPage($data_list->render()) // 数据列表分页
                ->addRightButton('delete')
                ->fetch();
    }

}