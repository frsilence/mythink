<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

Route::get('hello/:name', 'index/hello');

Route::get('', 'welcome/index/home'); 
Route::get('/help','welcome/index/help'); 
Route::get('/about','welcome/index/about');
Route::group('user/',function(){
    Route::get('auth/register','user/auth/create');
    Route::post('auth/save','user/auth/save');
    Route::get('auth/info/:id','user/auth/read');
    Route::get('loginget','user/session/create');
    Route::post('loginpost','user/session/save');
    Route::get(':id','user/session/read');
});

return [

];
