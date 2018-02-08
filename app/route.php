<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 完整域名绑定到admin模块
//Route::domain('api.zuanqun.com:8080','api');

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

    '__domain__'=>[
        'api'      => 'api',
        // 泛域名规则建议在最后定义
        'user'    =>  'user',
        'upgrade'    =>  'upgrade',
        're'     =>     'hot',
        'auth'   =>      'auth',
//        'auth'    =>    [
//            ':auth' => ['auth/login', ['method' => 'get']],
//            ':login' => ['auth/login', ['method' => 'get']],
//        ],
        'mp'    =>   'seller',
        'open'    =>    'open',
        'item'  =>  [
            ':id'=>'hot/item/index',
        ]
    ]
    // 下面是路由规则定义

];
