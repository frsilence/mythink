<?php

namespace app\user\controller;

use think\Controller;
use think\Request;

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
	        dump($result);
	    } else {
	        dump($requestData);
	    }
    }
}
