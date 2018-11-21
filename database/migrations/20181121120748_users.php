<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Users extends Migrator
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('name','string',['limit'=>15,'comment'=>'用户名'])
                ->addColumn('email','string',['limit'=>20,'comment'=>'邮箱'])
                ->addColumn('password','string',['limit'=>15,'comment'=>'密码'])
                ->addColumn('avatar','string',['null'=>true,'default'=>NULL,'comment'=>'用户头像路径'])
                ->addColumn('god','boolean',['default'=>FALSE,'comment'=>'是否管理员'])
                ->addTimestamps()
                ->addIndex(['name','email'],['unique'=>true])
                ->create();
    }
}
