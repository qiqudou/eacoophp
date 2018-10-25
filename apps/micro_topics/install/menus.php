<?php

return [
    // 导航
      'navigation' => [
          //头部导航(位置)
        'header' =>[
          [
            'title'=>'微话题',
            'icon' => '',
            'sub_menu'=>[
              [
                'title' => '话题列表',
                'icon'  => 'fa fa-list',
                'value'   => 'micro_topics/Index/index',
              ],
            ]
          ]

        ],
          //个人中心(位置)
        'my' => [
          [
            'title' => '我的话题',
            'icon'  => 'fa fa-list',
            'value'   => 'micro_topics/My/index',
          ],
        ],
      ],

    // 后台菜单及权限节点配置
    'admin_menus' =>[
        [
            'title'=>'微话题',
            'name' =>'micro_topics/index',
            'icon' => 'fa fa-comments-o',
            'is_menu'=>1,
            'sub_menu'=>[
                [
                    'title'=>'模块设置',
                    'name' => 'admin/modules/config?name=micro_topics',
                    'is_menu'=>1,
                    'no_pjax'=>1
                ],
                [
                    'title'=>'话题列表',
                    'name' => 'micro_topics/index/index',
                    'is_menu'=>1
                ],
                [
                    'title'=>'话题编辑',
                    'name' => 'micro_topics/index/edit',
                    'is_menu'=>0
                ],
                [
                    'title'=>'回复列表',
                    'name' => 'micro_topics/index/replylist',
                    'is_menu'=>0
                ],
                [
                    'title'=>'回复编辑',
                    'name' => 'micro_topics/index/replylistedit',
                    'is_menu'=>0
                ],
                [
                    'title'=>'会员列表',
                    'name' => 'micro_topics/users/index',
                    'is_menu'=>1
                ],
                [
                    'title'=>'会员编辑',
                    'name' => 'micro_topics/users/edit',
                    'is_menu'=>0
                ],
                [
                    'title'=>'话题分类',
                    'name' => 'micro_topics/category/index',
                    'is_menu'=>1
                ],
                [
                    'title'=>'回收站',
                    'name' => 'micro_topics/index/trash',
                    'is_menu'=>1
                ],
            ],
        ]
        
    ],
];