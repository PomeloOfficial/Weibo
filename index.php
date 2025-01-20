<?php
/**
 * 心有猛虎，细嗅蔷薇
 * 一款适用于Typecho的仿微博主题
 * 
 * @package Weibo
 * @author Pomelo
 * @version 3.0
 * @link https://weibo.rowingbohe.com
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

$this->need('header.php');?>
<?php $this->need('sidebar.php'); ?> 

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
               ->parse('<li class="menu-btn"><a href="{permalink}" target="_blank">{name}</a></li>'); ?>
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
                      <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
                      <?php $currGroup = get_object_vars($this->user) ['row']['group'];
                      if ($currGroup == "administrator"): ?>
                      <a href="<?php $this->options->adminUrl('write-post.php?cid=' . $this->cid ); ?>">后台编辑</a>
                      <?php endif; ?>
                    </span>
                  </div>
                  <h2 class="title" id="directory-0">
                    <a href="<?php $this->permalink() ?>" rel="bookmark"><?php $this->title() ?></a>
                  </h2>
                  <div class="summary" itemprop="description">
                      <a href="<?php $this->permalink() ?>"><?php $this->excerpt(140, '...'); ?>
                     <?php if ($this->options->ROWINGBOHE == '0'): ?>
                     <img src="<?php showThumbnail1($this); ?>" alt="<?php $this->title(); ?>" class="entry-image">
                     <?php elseif ($this->options->ROWINGBOHE == '1'): ?>
                     <img src="<?php showThumbnail2($this); ?>" alt="<?php $this->title(); ?>" class="entry-image">
                     <?php elseif ($this->options->ROWINGBOHE == '2'): ?>
                     <img src="<?php showThumbnail3($this); ?>" alt="<?php $this->title(); ?>" class="entry-image">
                     <?php elseif ($this->options->ROWINGBOHE == '3'): ?>
                     <img src="<?php $this->options->ROWINGBOHEUrl() ?>" alt="<?php $this->title(); ?>" class="entry-image">
                     <?php elseif ($this->options->ROWINGBOHE == '4'): ?>
                     <?php endif; ?>
                     </a>
                  </div>
                <footer class="entry-footer">
                  <ul class="items state">
                       <li class="item count-comment"><span class="icon"></span><?php $this->commentsNum(); ?></li>
                       <li class="item count-view"><span class="icon"></span><?php _e(getViewsStr($this)); ?></li>
                        <li class="item count-like"><a href="<?php $this->categoryUrl(','); ?>"><?php $this->category(','); ?></a></li>
                     <li class="item count-image">Tags: <?php $this->tags(',', true, 'none'); ?></li>
                  </ul>
                </footer>
              </article>
             <?php endwhile; ?>
            </div>
            <!-- 文章列表结束 -->
            <div class="heading">
              <div class="inner">
                <ul class="nav-menu-main">
                    <?php $this->pageNav('上一页', '下一页'); ?>
                </ul>
              </div>
            </div>
          </main>
        </div>
      </section>
    </div>

<?php $this->need('footer.php'); ?>
