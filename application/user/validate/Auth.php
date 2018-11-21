<?php

namespace app\user\validate;

use think\Validate;

class Auth extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     *
     * @var array
     */	
	protected $rule = [
            'name|名字'  =>  'require|max:15|unique:users|token',
            'email|邮件' =>  'require|email|unique:users|max:255',
            'password|密码' => 'require|min:6',
            'password_confirm|确认密码' => 'require|confirm:password|min:6',
        ];
    
    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */	
    protected $message = [];
}
