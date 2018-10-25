<?php 
// 自定义回复
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2018 http://www.eacoo123.com, All rights reserved.         
// +----------------------------------------------------------------------
// | [EacooPHP] 并不是自由软件,可免费使用,未经许可不能去掉EacooPHP相关版权。
// | 禁止在EacooPHP整体或任何部分基础上发展任何派生、修改或第三方版本用于重新分发
// +----------------------------------------------------------------------
// | Author:  心云间、凝听 <981248356@qq.com>
// +----------------------------------------------------------------------
namespace app\wechat\model;

use app\common\model\Base;

class Reply extends Base {

	protected $name = 'wechat_reply';
	// 定义时间戳字段名 
	protected $createTime = '';
    protected $updateTime = '';
    protected $insert =['status'=>1];
}
