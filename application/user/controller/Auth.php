<?php

namespace app\user\controller;

use think\Controller;
use think\Request;
use app\user\model\User;

class Auth extends Controller
{
    public function create()
    {
        $token = $this->request->token('__token__','sha1');
        $this->assign('token',$token);
        return $this->fetch();
    }
    public function save(Request $request)
    {
    	$requestData = $request->post();
	    $result = $this->validate($requestData, 'app\user\validate\Auth');
	    if (true !== $result) {
            //验证失败
	        return redirect('user/auth/create')->with('validate',$result);
	    } else {
            $user = User::create($requestData);
            return redirect('user/auth/read')->params(['id' => $user->id]);
	    }
    }
    public function read($id)
    {
        $user = User::get($id);
        if($user){
            $this->assign('user', $user);
            return $this->fetch();
        }
        else{
            return response('null');
        }
        
    }
    public function edit()
    {
        return 's';
    }
}
