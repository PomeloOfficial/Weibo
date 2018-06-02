<?php
/**
 * 本主题二次移植自<a href="https://www.52ecy.cn/post-71.html">新浪微博主题静态模板(移植 by 阿珏)</a>，由<a href="https://blog.20d.win">globalHe</a>二次移植.
 * 
 * @package Weibo
 * @author globalHe
 * @version 1.0.0
 * @link https://github.com/Rowingbohe/Weibo
 */

$this->need('header.php');?>
<?php include('sidebar.php'); ?> 

        <div id="loop" class="right">
          <main id="main" class="width-half index" role="main" itemprop="mainContentOfPage" style="min-height: 514px;">
            <div class="heading">
              <div class="inner">
                <ul class="nav-menu-main">
                <?php if ($this->is('index')) : ?>
                  <li class="active">
                    <a href="<?php $this->options->siteUrl() ?>">全部</a></li>
                  <?php $this->widget('Widget_Metas_Category_List')
               ->parse('<li class="menu-btn"><a href="{permalink}">{name}</a></li>'); ?>
                </ul>
                <?php elseif ($this->is('category')): ?>
                  <li class="menu-btn">
                    <a href="<?php $this->options->siteUrl() ?>">全部</a></li>
                  <?php $this->widget('Widget_Metas_Category_List')
               ->parse('<li class="menu-btn"><a href="{permalink}">{name}</a></li>'); ?>
                <?php endif; ?>
              </div>
            </div>
			<!-- 文章列表 -->
            <div id="primary" class="list">
             <?php while($this->next()): ?>
              <article class="post">
                <div class="entry-header pull-left">
                  <img src="<?php $this->options->headImgUrl() ?>" height="100" class="topic-thumb bg tips-right"></div>
                <div class="entry-content">
                  <div class="meta">
                    <div class="author" itemprop="author">
                      <span class="author-name"><?php $this->author(); ?></span>
                      <span class="is-author icon" aria-label="This is master"></span></div>
                    <time class="author-time" itemprop="datePublished" datetime=""><?php $this->date('Y-m-d H:i'); ?></time>
                    <span class="author-time">来自
                      <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></span>
                  </div>
                  <h2 class="title" id="directory-0">
                    <a href="<?php $this->permalink() ?>" rel="bookmark"><?php $this->title() ?></a></h2>
                  <div class="summary" itemprop="description"><?php $this->excerpt(140, '...'); ?></div>
                  <footer class="entry-footer"></br><span class="icon"></span><?php $this->commentsNum(); ?> / <a href="<?php $this->categoryUrl(','); ?>"><?php $this->category(','); ?></a> / Tags: <?php $this->tags(',', true, 'none'); ?></footer>
              </article>
             <?php endwhile; ?>
            </div>
            <!-- 文章列表结束 -->

            <div class="heading">
              <div class="inner">
                <ul class="nav-menu-main">
<?php $this->pageNav('上一页', '下一页'); ?>
              </div>
            </div>



          </main>
        </div>
      </section>
    </div>

<?php $this->need('footer.php'); ?>