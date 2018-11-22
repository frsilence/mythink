<?php

namespace app\http\middleware;
use think\facade\Session;
class Auth
{
    public function handle($request, \Closure $next)
    {
        if(session('?user')){
            $request->user = session('user');
            return $next($request);
        }
        else{
            return redirect('user/session/create');
        }
        
    }
}
