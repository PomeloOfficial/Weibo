<?php
/**
 * Weibo 自定义友链页面模板
 *
 * @package custom
 */

$this->need('header.php');?>
<?php include('sidebar.php'); ?> 

<div id="loop" class="right"> 
    <aside id="aside" class="center">
        <div class="nowrap"><i class="icon louie-location"></i>
	<a href="<?php $this->options->siteUrl(); ?>">Home</a> &raquo;</li>
	<?php if ($this->is('index')): ?><!-- 页面为首页时 -->
		Latest Post
	<?php elseif ($this->is('post')): ?><!-- 页面为文章单页时 -->
		<?php $this->category(); ?> &raquo; <?php $this->title() ?>
	<?php else: ?><!-- 页面为其他页时 -->
		<?php $this->archiveTitle(' &raquo; ','',''); ?>
	<?php endif; ?>
</span>
        </div>    
    </aside>
    <main class="plain width-half single" style="min-height: 500px;">
        <div id="primary" class="content">
            <article class="post">
                <header class="entry-header">
                    <h1 class="title" itemprop="name"><?php $this->title() ?></h1>
                    <div class="meta">发布于 <time itemprop="datePublished"><?php $this->date('Y-m-d H:i'); ?></time> / <a href="<?php $this->categoryUrl(','); ?>"><?php $this->category(','); ?></a> / <span><?php $this->commentsNum('%d条评论'); ?></span> / Tags: <?php $this->tags(',', true, 'none'); ?> / <?php _e(getViewsStr($this)); /* $this 是 Widget_Archive 对象 */ ?> 次浏览
                    </div>
                </header>
                <div class="entry-content"> 
                    <p><?php $this->content('Continue Reading...'); ?>
          <div class="widget">
           <ul class="item hot-comment">
            <!-- 友链 -->
            <?php Links_Plugin::output('
               <li class="item hot-comment">
                  <div class="image">
                    <a href="{url}"><img height="100" src="{image}"></div></a>
                  <div class="info">
                    <a href="{url}"><h4 class="title nowarp">{name}</h4></a>
                    <div class="meta">
                      <a class="hot-comment-link" alt="{description}" href="{url}">
                        <p>{description}</p>
                      </a>
                    </div>
                  </div>
               </li>
            '); ?>
            <!-- 友链结束 -->
          </ul>
          </div></p>
         </div>
<?php $this->need('comments.php'); ?>
            </article>
        </div>
</div>
</main>
            </section>

<?php $this->need('footer.php'); ?>