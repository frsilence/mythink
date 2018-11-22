<?php /*a:2:{s:72:"D:\wwwroot\mythink.test\mythink\resources\views\user\session\create.html";i:1542889277;s:72:"D:\wwwroot\mythink.test\mythink\resources\views\user\layout\default.html";i:1542895421;}*/ ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>登入 -- MyTP</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous">
    <link rel="stylesheet" href="/static/css/app.css">
  </head>
<body>
  <header>
    <div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">MyTP 5.1</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo url('welcome/index/home'); ?>">主页
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo url('welcome/index/help'); ?>">帮助</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo url('welcome/index/about'); ?>">关于</a>
              </li>
            </ul>
            <a class="btn btn-outline-success my-2 my-sm-0" href="<?php echo url('user/session/create'); ?>">登录</a>
            &nbsp;
            <a class="btn btn-outline-success my-2 my-sm-0" href="<?php echo url('user/auth/create'); ?>">注册</a>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <div class="container">
    
<div class="col-md-offset-2 col-md-8">
    <div class="panel panel-default mt-5">
        <div class="panel-heading mb-3">
            <h4>登入</h4>
        </div>
        <?php if((session('validate'))): ?>
            <div class="alert alert-warning" role="alert">
                <?php echo htmlentities(app('session')->get('validate')); ?>
            </div>
        <?php endif; ?>
        <div class="panel-body">
            <form method="POST"
                  action="<?php echo url('user/session/save'); ?>">

                <input type="hidden" name="__token__" value="<?php echo htmlentities($token); ?>" />

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">邮箱</span>
                    </div>
                    <input type="email"
                           class="form-control"
                           name="email">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">密码</span>
                    </div>
                    <input type="password"
                           class="form-control"
                           name="password">
                </div>

                <button type="submit"
                        class="btn btn-primary btn-block">登入</button>
            </form>
        </div>
    </div>
</div>

  </div>
  <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="/static/js/app.js"></script>
</body>
</html>