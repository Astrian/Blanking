<!DOCTYPE HTML>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="theme-color" content="#242424">
    
    
    <title>
      <?php bloginfo('name'); ?>
    </title>
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/wp-content/themes/Blanking/asset/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="/wp-content/themes/Blanking/asset/js/jquery.pin.js"></script>
    <script src="/wp-content/themes/Blanking/asset/js/moment-with-locales.js"></script>
    
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0 Feed" href="/index.php/feed/"/>

  </head>
  
  <body>
    <div class="nav-bar">
      <div class="container">
        <div class="row">
        <div class="col-md-2 col-md-offset-1 websiteTitle xingothic-sc-w7">
          <div class="pull-right nav-bar-action menuButton" style="display:none;"><button class="btn btn-default btn-sm" onclick='openMenu();'><span class='glyphicon glyphicon-option-vertical'></span></button></div>
          <?php bloginfo('name'); ?>
        </div>
        <div class="pagenav col-md-7">
            <div class="pull-right nav-bar-action" style="display:none; padding-top:10px;"><button class="btn btn-default btn-sm" onclick='closeMenu();'><span class='glyphicon glyphicon-remove'></span></button></div>
            <a href='/'><div class='pagenavitem navitem-index xingothic-sc-w4'>主页</div></a>
            <a href='archives.html'><div class='pagenavitem navitem-archive xingothic-sc-w4'>存档</div></a>
            <a href='AboutMe.html'><div class='pagenavitem navitem-aboutme xingothic-sc-w4'>关于我</div></a>
            <a href='/index.php/feed/'><div class='pagenavitem xingothic-sc-w4'>RSS</div></a>
            <a href="#" data-toggle="modal" data-target="#search"><div class='pagenavitem xingothic-sc-w4'>搜索</div></a>
          </div>
          </div>
      </div>
    </div>
    <script>moment.locale('zh-cn');</script>
    <div class="body">