<?php
// 文章验证器
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 http://www.eacoo123.com, All rights reserved.         
// +----------------------------------------------------------------------
// | [EacooPHP] 并不是自由软件,可免费使用,未经许可不能去掉EacooPHP相关版权。
// | 禁止在EacooPHP整体或任何部分基础上发展任何派生、修改或第三方版本用于重新分发
// +----------------------------------------------------------------------
// | Author:  心云间、凝听 <981248356@qq.com>
// +----------------------------------------------------------------------
namespace app\micro_topics\validate;

use think\Validate;

class Index extends Validate
{
    // 验证规则
    protected $rule = [
        'title'       => 'require|length:1,30',
        'uid'         => 'number|gt:0',
        'content'       => 'require',
    ];

    protected $message = [
        'title.require'      => '标题不能为空',
        'title.length'       => '标题长度不正确',
        'uid.number'         => '作者ID必须为大于0数字',
        'uid.gt'             => '作者ID必须为大于0数字',
        'content.require'    => '内容不能为空',
    ];

    protected $scene=[
        'edit' => ['title','uid','content'],
    ];
}