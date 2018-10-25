<?php
// 钩子控制器       
// +----------------------------------------------------------------------
// | PHP version 5.4+                
// +----------------------------------------------------------------------
// | Copyright (c) 2014-2016 http://www.eacoo123.com, All rights reserved.
// +----------------------------------------------------------------------
// | Author: 心云间、凝听 <981248356@qq.com>
// +----------------------------------------------------------------------

namespace app\micro_topics\widget;
use app\common\controller\Widget;
use app\micro_topics\model\MicroTopicsUsers as MTUserModel;
use app\micro_topics\model\MicroTopics as ListModel;

class Hooks extends Widget
{
    public function _initialize() {
        parent::_initialize();

    }

    /**
     * @var array 模块钩子
     */
    public $hooks = [
        'RegisterUser',
        'MicroTopicsUserPost'
    ];


    /*
     *  RegisterUser
     *  注册用户拓展
     *  @time: 2018-8-23
     *  @author: yyyvy <76836785@qq.com>
     * */
    public function RegisterUser($params=[]){
        $data['uid'] = $params['uid'];
        //用户其他信息
        $UsersMeta = new MTUserModel();
        $UsersMeta->save($data);
    }


    /*
     *  MicroTopicsUserPost
     *  {:hook('MicroTopicsUserPost',['uid' => $uid])}
     *  用户发帖数获取
     *  @time: 2018-8-24
     *  @author: yyyvy <76836785@qq.com>
     * */
    public function MicroTopicsUserPost($params=[]){
        return ListModel::where('uid',$params['uid'])->count();
    }

}