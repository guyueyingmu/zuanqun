<?php

namespace app\validate\center;

use think\Validate;

class Login extends Validate
{

    protected $rule =   [
        'phone'  => 'require|number|length:11',
        'password'   => 'require|min:6|max:16',
    ];

    protected $message  =   [
        'phone.require' => '请输入手机号码',
        'phone.number'     => '手机号码格式不正确',
        'phone.length'     => '手机号码格式为11位数字格式',
        'password.require'     => '请输入密码',
        'password.min'  => '密码设置最小6位',
        'password.max'  => '密码设置最长不超过16位',
    ];

}