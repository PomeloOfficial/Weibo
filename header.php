<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="theme-color" content="#4c4c4c">
    <meta name="applicable-device" content="pc,mobile">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=11,IE=10,IE=9,IE=8">
    <title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>

    <!-- Favicons -->
    <link rel="icon shortcut" type="image/ico" href="<?php $this->options->faviconIUrl() ?>">
    <link rel="icon" sizes="192x192" href="<?php $this->options->faviconUrl() ?>">
    <link rel="apple-touch-icon" href="<?php $this->options->faviconUrl() ?>">

    <!-- The Twitter Card protocol -->
    <meta name="twitter:title" content="<?php $this->archiveTitle(); ?>">
    <meta name="twitter:description" content="<?php $this->options->description() ?>">
    <meta name="twitter:image" content="<?php $this->options->faviconUrl() ?>">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:url" content="<?php $this->permalink(); ?>" />

    <link rel="stylesheet" href="<?php $this->options->themeUrl('style/style.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style/custom.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style/cue.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style/like.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style/emm.css'); ?>" type="text/css">
    <script src="https://cdnjs.loli.net/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <?php $this->header(); ?>
  </head>
  <body class="home blog" style="background-image: url(<?php $this->options->themeUrl('images/body_repeat.png'); ?>); background-color: #d4d5e0; background-repeat: repeat-x; background-position: center 0;">
    <div id="wrapper" class="theme" style="background:url(<?php $this->options->bgUrl(); ?>) no-repeat top center; padding-top:50px;background-position: 0px 48px;background-color: white;background-attachment:fixed;background-size:100%;">
      <header id="header" class="site-header">
       <!-- 导航 -->
        <section class="topbar">
          <div class="inner top-width">
            <nav class="nav pull-left">
              <ul id="menu-1" class="nav-menu top-menu icon">
                    <li>
                       <a href="<?php $this->options->Menu1link(); ?>">
                       <?php $this->options->Menu1icon(); ?><?php $this->options->Menu1text(); ?></a>
                    </li>
                    <li>
                       <a href="<?php $this->options->Menu2link(); ?>">
                       <?php $this->options->Menu2icon(); ?><?php $this->options->Menu2text(); ?></a>
                    </li>
                    <li>
                       <a href="<?php $this->options->Menu3link(); ?>">
                       <?php $this->options->Menu3icon(); ?><?php $this->options->Menu3text(); ?></a>
                    </li>
                    <li>
                       <a href="<?php $this->options->Menu4link(); ?>">
                       <?php $this->options->Menu4icon(); ?><?php $this->options->Menu4text(); ?></a>
                    </li>
                    <li>
                       <a href="<?php $this->options->Menu5link(); ?>">
                       <?php $this->options->Menu5icon(); ?><?php $this->options->Menu5text(); ?></a>
                    </li>
              </ul>
            </nav>
            <!-- 导航右侧 -->
            <div class="meta pull-right">
               <?php if($this->user->hasLogin()): ?>
                欢迎 <?php $this->user->screenName(); ?> ~&nbsp;&nbsp;&nbsp;
               <?php endif; ?>
                <form id="search" method="post" class="searchform" action="<?php $this->options->siteUrl(); ?>" role="search">
                <input type="text" id="s" name="s" class="textinput" size="26" placeholder="Search ...">
                <span class="icon search-icon"></span></form>
              <div class="logged button">
               <?php if($this->user->hasLogin()): ?>
                <a href="<?php $this->options->logoutUrl(); ?>" target="_blank" class="login" style="margin-right:10px;">
                  <span class="icon"></span>Logout</a>
               <?php else: ?>
                <a href="<?php $this->options->loginUrl(); ?>" target="_blank" class="login" style="margin-right:10px;">
                  <span class="icon"></span>Sign in</a>
               <?php endif; ?>

               <?php if($this->user->hasLogin()): ?>
                <a href="<?php $this->options->adminUrl(); ?>" target="_blank" class="login" style="margin-right:10px;">
                  Admin</a>
               <?php else: ?>
               <?php if ($this->options->registerOpen == '0'): ?>
                <a href="<?php $this->options->adminUrl('register.php'); ?>" target="_blank" class="login" style="margin-right:10px;">
                  Sign up</a>
               <?php endif; ?>
               <?php endif; ?>
              </div>
            </div>
          </div>
        </section>
        <!-- 导航结束 -->
        <section class="banner bg" style="background-image: url(<?php $this->options->cardBgUrl(); ?>)">
          <div class="big-title">
            <a style="color:#fff;" href="<?php $this->options->siteUrl(); ?>">
              <h1 class="big-title-h1"><?php $this->options->yourNickname(); ?>
                <i class="male" style="background-image:url(<?php $this->options->themeUrl('images/icon.png'); ?>);background-position: -100px -50px;"></i>
                <i class="vip_lev" style="background-image:url(<?php $this->options->themeUrl('images/icon.png'); ?>);background-position: -25px -125px;"></i>
              </h1>
            </a>
            <h3 class="big-title-h3 tips-top" aria-label="<?php $this->options->yourDescription(); ?>" id="yiyan"><?php $this->options->yourDescription(); ?>
              <br></h3>
          </div>

            <div class="contactme">
            <div class="weixin">
              <?php $this->options->profileText1(); ?>
              <div class="weixin_drop-content">
                <img class="weixin_qode" src="<?php $this->options->profileLink1(); ?>" alt="微信二维码"></div></div>
            <a class="qq" href="<?php $this->options->profileLink2(); ?>">
              <?php $this->options->profileText2(); ?></a>
            <div class="menu">

            <div class="menu">
              <span>☰</span>
              <div class="menu_drop-content">
                <ul>
                  <li>
                    <a href="<?php $this->options->yourMenuLink1(); ?>" rel="nofollow" target="_blank"><?php $this->options->yourMenuText1(); ?></a></li>
                  <li class="line"></li>
                  <li>
                    <a href="<?php $this->options->yourMenuLink2(); ?>" rel="nofollow" target="_blank"><?php $this->options->yourMenuText2(); ?></a></li>
                  <li class="line"></li>
                  <li>
                    <a href="<?php $this->options->yourMenuLink3(); ?>" rel="nofollow" target="_blank"><?php $this->options->yourMenuText3(); ?></a></li>
                  <li class="line"></li>
                  <li>
                    <a href="<?php $this->options->yourMenuLink4(); ?>" rel="nofollow" target="_blank"><?php $this->options->yourMenuText4(); ?></a></li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <div class="touxiang">
          <a href="<?php $this->options->siteUrl(); ?>" target="_top">
            <img src="<?php $this->options->headImgUrl(); ?>" alt="头像"></a>
          <span class="renzheng" style="background-image:url(<?php $this->options->themeUrl('images/icon.png'); ?>);"></span>
        </div>
        <div class="banner-item width">
          <a class="active" href="<?php $this->options->siteUrl(); ?>">我的主页</a>
      </header>