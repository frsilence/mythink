<?php

namespace app\user\controller;

use think\Controller;
use think\Request;
use app\user\model\User;

class Session extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        if(session('?user')){
            $user = session('user');
            return redirect('user/auth/info',['id'=>$user->id]);
        }
        else{
            $token = $this->request->token('__token__','sha1');
            $this->assign('token',$token);
            return $this->fetch();
        }       
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        $result = $this->validate($request->post(),'app\user\validate\Session');
        if(true !== $result){
            return redirect('user/session/create')->with('validate',$result);
        }else{
            $user = User::where('email',$request->email)->find();
            if($user !== null && password_verify($request->password,$user->password)){
                session('user',$user);               
                return redirect('user/auth/read',['id'=>1]);
            }else{
                return redirect('user/session/create')->with('validate','邮件地址不存在或密码错误');
            }
        }
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        return $id;
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
