<?php
/**
 * 本主题二次移植自<a href="https://www.52ecy.cn/post-71.html">新浪微博主题静态模板(移植 by 阿珏)</a>，由<a href="https://blog.20d.win">globalHe</a>二次移植.
 * 
 * @package Weibo
 * @author globalHe
 * @version 1.0.0
 * @link https://blog.20d.win
 */

$this->need('header.php');?>

        <!-- 导航 -->
        <section class="topbar">
          <div class="inner top-width">
            <nav class="nav pull-left">
              <ul id="menu-%e8%8f%9c%e5%8d%95-1" class="nav-menu top-menu icon">
                <li class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-260">
                  <a href="<?php $this->options->siteUrl(); ?>">
                    <i class="icon louie-home"></i>首页</a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-94">
                  <a href="https://www.52ecy.cn/post-15.html">
                    <i class="icon louie-friend-o-d"></i>邻居</a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-93">
                  <a href="https://www.52ecy.cn/post-9.html">
                    <i class="icon louie-message"></i>留言</a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-251">
                  <a href="https://www.52ecy.cn/post-12.html">
                    <i class="icon louie-folder"></i>归档</a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-92">
                  <a href="https://www.52ecy.cn/post-12.html">
                    <i class="icon louie-profile"></i>关于</a>
                </li>
              </ul>
            </nav>
            <!-- 导航右侧 -->
            <div class="meta pull-right">
              <form method="get" class="searchform" action="https://blog.52ecy.cn/" role="search">
                <input type="search" name="keyword" class="textinput" size="26" placeholder="Search ...">
                <span class="icon search-icon"></span></form>
              <div class="logged button">
                <a href="https://blog.52ecy.cn/admin" target="_blank" class="login" style="margin-right:10px;">
                  <span class="icon"></span>Sign in</a>
                <a href="https://www.52ecy.cn/Music" target="_blank">
                  <span class="icon"></span>
                  <span>Music</span></a>
              </div>
            </div>
          </div>
        </section>
        <!-- 导航结束 -->
        <section class="banner bg" style="background-image: url(https://ww2.sinaimg.cn/large/a15b4afegy1fnagaoz26lj20sn0g476s.jpg)">
          <div class="big-title">
            <a style="color:#fff;" href="https://blog.52ecy.cn/">
              <h1 class="big-title-h1">阿珏
                <i class="male" style="background-image:url(usr/themes/Weibo/images/icon.png);background-position: -100px -50px;"></i>
                <i class="vip_lev" style="background-image:url(usr/themes/Weibo/images/icon.png);background-position: -25px -125px;"></i>
              </h1>
            </a>
            <h3 class="big-title-h3 tips-top" aria-label="Write the Code. Change the World." id="yiyan">Write the Code. Change the World.
              <br></h3>
          </div>
          <div class="contactme">
            <div class="weixin">
              <span class="icon"></span>微信
              <div class="weixin_drop-content">
                <img class="weixin_qode" src="usr/themes/Weibo/images/ewm.webp" alt="微信二维码"></div></div>
            <a class="qq" href="tencent://AddContact/?fromId=45&fromSubId=1&subcmd=all&uin=2932213090">
              <span class="icon"></span>扣扣</a>
            <div class="menu">
              <span>☰</span>
              <div class="menu_drop-content">
                <ul>
                  <li>
                    <a href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=admin@52ecy.cn" rel="nofollow" target="_blank">邮&nbsp;箱</a></li>
                  <li>
                    <a href="https://weibo.com/52ecy" target="_blank">微&nbsp;博</a></li>
                  <li class="line"></li>
                  <li>
                    <a href="http://music.163.com/#/playlist?id=652001610" rel="nofollow" target="_blank">网易云</a></li>
                  <li>
                    <a href="https://live.bilibili.com/515658" rel="nofollow" target="_blank">bilibili</a></li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <div class="touxiang">
          <a href="https://blog.52ecy.cn/" target="_top">
            <img src="https://tvax4.sinaimg.cn/crop.0.0.640.640.180/78350c19ly8fjzdg8pbsqj20hs0hsmyu.jpg" alt="头像"></a>
          <span class="renzheng" style="background-image:url(usr/themes/Weibo/images/icon.png);"></span>
        </div>
        <div class="banner-item width">
          <a class="active" href="https://blog.52ecy.cn/">我的主页</a>
          <a href="https://www.52ecy.cn/gallery/">我的相册</a></div>
      </header>
      <section id="contents" class="width">
        <!-- 侧边栏 -->
        <aside id="aside" class="left">
          <div class="inner">
            <div class="sns web-info">
              <li class="frinum">
                <a href="javascript:void(0)">5
                  <span>关注</span></a>
              </li>
              <li class="vitnum">
                <a href="javascript:void(0)">1292
                  <span>浏览</span></a>
              </li>
              <li class="ptnum">
                <a href="javascript:void(0)">7
                  <span>文章</span></a>
              </li>
            </div>
            <div class="sns master-info">
              <div class="person-info">
                <p class="verify clearfix">
                  <span class="weibo_renz tips-top" aria-label="微博认证用户哦" style="background-image:url(usr/themes/Weibo/images/icon.png);"></span>
                  <a class="master_lev tips-top" aria-label="当前等级:LV.20" href="javascript:void(0);">
                    <span>LV.20</span></a>
                </p>
                <p class="info">认证：简约博客官方网站</p></div>
              <ul class="m_info-items">
                <li class="item">
                  <i class="icon louie-location"></i>
                  <span class="tips-right" aria-label="我在日本东京,你在哪里?">日本：东京</span></li>
                <li class="item">
                  <i class="icon louie-time-o"></i>
                  <span class="tips-right" aria-label="我的生日：1月1日">生日：1月1日</span></li>
                <li class="item">
                  <i class="icon louie-smiling"></i>
                  <span class="tips-right" aria-label="我是帅气的阿珏酱！">简介：帅气的阿珏酱！</span></li>
                <li class="item last">
                  <i class="icon louie-link-o"></i>
                  <a class="tips-right" aria-label="个性域名" href="https://blog.52ecy.cn/" target="_blank">个性域名：https://blog.52ecy.cn/</a></li>
              </ul>
              <div class="sns readmore">
                <a href="https://www.52ecy.cn/post-18.html">查看更多&nbsp;&gt;</a></div>
            </div>
            <div class="alteration">
              <div class="widget">
                <h3 class="widget-title">
                  <i class="icon louie-notice"></i>他们抢着跟我说这些</h3>
                <div class="textwidget">
                <!-- 评论 -->
                  <ul class="items hot-comment">
                    <li class="item">
                      <div class="image">
                        <img src="https://q.qlogo.cn/headimg_dl?dst_uin=1638211921@qq.com&spec=100"></div>
                      <div class="info">
                        <h4 class="title nowarp">简约博客</h4>
                        <div class="meta">
                          <a class="hot-comment-link" href="https://blog.52ecy.cn/?post=1">
                            <p>欢迎使用简约博客程序</p>
                          </a>
                        </div>
                      </div>
                    </li>
                  </ul>
                <!-- 评论结束 -->
                </div>
              </div>
              <div class="widget">
                <h3 class="widget-title">
                  <i class="icon icon louie-smile"></i>左邻右舍</h3>
                <ul class="items links-bar">
                <!-- 友链 -->
                  <li class="item">
                    <a href="https://blog.52ecy.cn" target="_blank" title="简约博客官方主页">简约博客</a></li>
                  <li class="item">
                    <a href="https://www.52ecy.cn" target="_blank" title="一个二次元风味的技术博客">阿珏博客</a></li>
                <!-- 友链结束 -->
                </ul>
              </div>
              <div class="widget">
                <h3 class="widget-title">
                  <i class="icon louie-trend"></i>他们排队都在看这些文章</h3>
                <ul class="items hot-views">
                  <li class="item">
                  <!-- 文章排行榜 -->
                    <h4 class="title nowrap">
                      <a href="https://blog.52ecy.cn/?post=6" title="简约博客新主题Sina上线 - 魔改新浪"># 简约博客新主题Sina上线 - 魔改新浪</a>
                    </h4>
                  <!-- 结束 -->
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </aside>
        <!-- 侧边栏结束 -->
        <div id="loop" class="right">
          <main id="main" class="width-half index" role="main" itemprop="mainContentOfPage" style="min-height: 514px;">
            <div class="heading">
              <div class="inner">
                <ul class="nav-menu-main">
                  <li class="active">
                    <a href="https://blog.52ecy.cn">全部</a></li>
                  <li class="more-btn">
                    <a href="javascript:void(0)">更多</a>
                    <div class="more-content">
                      <ul id="menu-%e5%88%86%e7%b1%bb">
                        <li>
                          <a href="https://blog.52ecy.cn/?sort=1">正常的文章</a></li>
                        <li>
                          <a href="https://blog.52ecy.cn/?sort=2">站点大事件</a></li>
                      </ul>
                    </div>
                  </li>
                </ul>
                <form method="get" class="nav-searchform" action="https://blog.52ecy.cn/" role="search">
                  <input type="search" name="s" class="nav-input" placeholder="搜索他的文章" />
                  <i class="nav-icon icon search-icon">&#xe671;</i></form>
              </div>
            </div>
			<!-- 文章列表 -->
            <div id="primary" class="list">
            <?php while($this->next()): ?>
              <article class="post">
                <div class="entry-header pull-left">
                  <img src="https://tvax4.sinaimg.cn/crop.0.0.640.640.180/78350c19ly8fjzdg8pbsqj20hs0hsmyu.jpg" class="topic-thumb bg tips-right"></div>
                <div class="entry-content">
                  <div class="meta">
                    <div class="author" itemprop="author">
                      <span class="author-name"><?php $this->author(); ?></span>
                      <span class="is-author icon" aria-label="This is master"></span></div>
                    <time class="author-time" itemprop="datePublished" datetime="">09月30日 09:46</time>
                    <span class="author-time">来自
                      <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></span>
                  </div>
                  <h2 class="title" id="directory-0">
                    <a href="<?php $this->permalink() ?>" rel="bookmark"><?php $this->title() ?></a></h2>
                  <div class="summary" itemprop="description"><?php $this->content('Continue Reading...'); ?>
                    <a href="<?php $this->permalink() ?>>
                      <img src="usr/themes/Weibo/images/random/10.jpg" class="entry-image"></a></div>
                </div>
              </article>
            </div>
<?php endwhile; ?>
            
            
            <!-- 文章列表结束 -->
          </main>
        </div>
      </section>
    </div>

<?php $this->need('footer.php'); ?>