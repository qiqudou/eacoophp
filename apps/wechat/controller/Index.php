<?php
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2018 http://www.eacoo123.com, All rights reserved.         
// +----------------------------------------------------------------------
// | [EacooPHP] 并不是自由软件,可免费使用,未经许可不能去掉EacooPHP相关版权。
// | 禁止在EacooPHP整体或任何部分基础上发展任何派生、修改或第三方版本用于重新分发
// +----------------------------------------------------------------------
// | Author:  心云间、凝听 <981248356@qq.com>
// +----------------------------------------------------------------------
namespace app\wechat\controller;

class Index extends Home {
	protected $materialModel;
    function _initialize()
    {
        parent::_initialize();
        
    }
    
    public function index()
    {
    	if (empty(session('?wechat_user'))) {
    		session('wechat_oauth_target_url',$this->url);
	    	$oauth_url = $this->request->domain().'/wechat/Oauth/1';
	        header('location:'.$oauth_url);
    	} else{
    		halt(session('wechat_user'));
    	}
    	
    }

}