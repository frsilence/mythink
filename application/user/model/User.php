<?php

namespace app\user\model;

use think\Model;

class User extends Model
{
    protected $table = 'users';
    // 定义运行操作的字段
    protected $field = ['name', 'email', 'password', 'avatar'];
    //设置密码字段修改器（加密）
    public function setPasswordAttr($value)
    {
        return password_hash($value,PASSWORD_DEFAULT);
    }
    //邮箱修改器（转换为小写字母）
    public function setEmailAttr($value)
    {
        return strtolower($value);
    }
}
