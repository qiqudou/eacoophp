<?php
// 模块配置
return [
    'need_check' => [
        'title'   => '前台发布审核',
        'type'    => 'radio',
        'options' => [
            1 => '需要',
            0 => '不需要',
        ],
        'value'   => '0',
    ],
    'toggle_comment' => [
        'title'  => '是否允许评论文档',
        'type'   =>'radio',
        'options' => [
            '1'   => '允许',
            '0'   => '不允许',
        ],
        'value'  => '1',
    ],
    'forum_name' => [
        'title'  => '版块名称',
        'type'   =>'text',
        'value'  => '微话题版块',
    ],
    'forum_describe' => [
        'title'  => '版块描述',
        'type'   =>'textarea',
        'value'  => '这是一个描述内容！',
    ]
];