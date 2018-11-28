<?php

namespace app\user\controller;

use think\Controller;
use think\Request;
use app\user\model\User;

class Auth extends Controller
{
    protected $middleware = [
        'Auth' => ['only' => ['read'] ],
        ];
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
            session('user',$user);
            return redirect('user/auth/read',['id' => $user->id]);
	    }
    }
    public function read(Request $request,$id)
    {
        $user = User::get($id);
        if($user==null){
            return response('null');
        }
        else{
            $this->assign('user', $user);
            return $this->fetch();
        }
        
    }
    public function edit()
    {
        return 's';
    }
}
