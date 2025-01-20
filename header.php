<!DOCTYPE html>
<html>
  <head>
	<meta charset="<?php $this->options->charset(); ?>">
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
    <meta name="twitter:title" content="<?php $this->options->title(); ?>">
    <meta name="twitter:description" content="<?php $this->options->description() ?>">
    <meta name="twitter:image" content="<?php $this->options->faviconUrl() ?>">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:url" content="<?php $this->permalink(); ?>" />

    <!-- QQ Card -->
    <meta itemprop="name" content="<?php $this->options->title(); ?>"/>
    <meta itemprop="image" content="<?php if ($this->options->ROWINGBOHE == '0'): ?><?php showThumbnail1($this); ?><?php elseif ($this->options->ROWINGBOHE == '1'): ?><?php showThumbnail2($this); ?><?php elseif ($this->options->ROWINGBOHE == '2'): ?><?php showThumbnail3($this); ?><?php elseif ($this->options->ROWINGBOHE == '3'): ?><?php $this->options->ROWINGBOHEUrl() ?><?php endif; ?>"/>
    <meta name="description" itemprop="description" content="<?php $this->options->description() ?>" />

    <link rel="stylesheet" href="<?php $this->options->themeUrl('style/style.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style/custom.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style/cue.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style/like.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style/emm.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style/style.mobile.css'); ?>" type="text/css">
    <script src="https://cdnjs.loli.net/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <?php $this->header(); ?>
    <?php $this->options->optionHeader() ?>
  </head>
  <body class="home blog" style="background-image: url(<?php $this->options->themeUrl('images/body_repeat.png'); ?>); background-color: #d4d5e0; background-repeat: repeat-x; background-position: center 0;">
    <div id="wrapper" class="theme" style="background:url(<?php ($this->options->bgUrl) ? $this->options->bgUrl() : $this->options->themeUrl('images/bg.jpg'); ?>) no-repeat top center; padding-top:50px;background-position: 0px 48px;background-color: white;background-attachment:fixed;background-size:100%;">
      <header id="header" class="site-header">
       <!-- 导航 -->
        <section class="topbar">
          <div class="inner top-width">
            <nav class="nav pull-left">
              <ul id="menu-1" class="nav-menu top-menu icon">
                <?php $this->options->menuContent(); ?>
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
        <section class="banner bg" style="background-image: url(<?php ($this->options->cardBgUrl) ? $this->options->cardBgUrl() : $this->options->themeUrl('images/cardBg.png'); ?>)">
          <div class="big-title">
            <a style="color:#fff;" href="<?php $this->options->siteUrl(); ?>">
              <h1 class="big-title-h1"><?php ($this->options->yourNickname) ? $this->options->yourNickname() : $this->options->title(); ?>
                <i class="male" style="background-image:url(<?php $this->options->themeUrl('images/icon.png'); ?>);background-position: -100px -50px;"></i>
                <i class="vip_lev" style="background-image:url(<?php $this->options->themeUrl('images/icon.png'); ?>);background-position: -25px -125px;"></i>
              </h1>
            </a>
            <h3 class="big-title-h3 tips-top" aria-label="<?php ($this->options->yourNickname) ? $this->options->yourDescription() : $this->options->description(); ?>"><?php ($this->options->yourNickname) ? $this->options->yourDescription() : $this->options->description(); ?>
              <br></h3>
          </div>

            <div class="contactme">
            <div class="weixin">
              <?php $this->options->profileText1(); ?>
              <div class="weixin_drop-content">
                <img class="weixin_qode" src="<?php $this->options->profileLink1(); ?>" alt="二维码"></div></div>
            <a class="qq" href="<?php $this->options->profileLink2(); ?>">
              <?php $this->options->profileText2(); ?></a>
            <div class="menu">

            <div class="menu">
              <span>☰</span>
              <div class="menu_drop-content">
                <ul>
                  <?php $this->options->yourMenuContent(); ?>
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
        </div>
      </header>