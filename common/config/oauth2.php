<?php

return [
    // ----------------------- 默认配置 ----------------------- //

    'config' => [
        // 菜单配置
        'menu' => [
            'location' => 'addons', // default:系统顶部菜单;addons:应用中心菜单
            'icon' => 'fa fa-puzzle-piece',
        ],
        // 子模块配置
        'modules' => [

        ],
    ],

    // ----------------------- 权限配置 ----------------------- //

    'authItem' => [

    ],

    // ----------------------- 快捷入口 ----------------------- //

    'cover' => [

    ],

    // ----------------------- 菜单配置 ----------------------- //

    'menu' => [
        [
            'title' => '文档管理',
            'route' => 'doc/index',
            'icon' => '',
            'params' => [

            ],
        ],
        [
            'title' => '文档分类',
            'route' => 'cate/index',
            'icon' => '',
            'params' => [

            ],
        ],
        [
            'title' => '行为记录',
            'route' => 'action/index',
            'icon' => '',
            'params' => [

            ],
        ],
    ],
];