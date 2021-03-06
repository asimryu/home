<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="<?php echo CSS;?>bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="<?php echo CSS;?>bootstrap-theme.min.css">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/start/jquery-ui.css">
        <link rel="stylesheet" href="<?php echo CSS;?>main.css">

        <script src="<?php echo JS;?>vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <?php if( ! $member['userlogin'] ):?>
          <form action="<?php echo SITE_ROOT;?>/app/pages/login.php" method="POST" class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" name="email" placeholder="Email" class="form-control" required>
            </div>
            <div class="form-group">
              <input type="password" name="pass" placeholder="Password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
            <a href="#" class="sign-up btn btn-primary">Sign up</a>
          </form>
         <?php else:?>
          <div class="logout navbar-right">
           <span><?php echo $member['username'];?>님 반갑습니다.</span>
           <a href="<?php echo SITE_ROOT;?>/app/pages/logout.php" class="btn btn-warning">로그아웃</a>
          </div>
         <?php endif ?>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
