<?php $this->need('header.php');?>
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
                    <div class="meta">发布于 <time itemprop="datePublished"><?php $this->date('Y-m-d H:i'); ?></time> / <a href="<?php $this->categoryUrl(','); ?>"><?php $this->category(','); ?></a> / <span><?php $this->commentsNum('%d条评论'); ?></span> / Tags: <?php $this->tags(',', true, 'none'); ?>
                    </div>
                </header>
                <div class="entry-content"> 
                    <p><?php $this->content('Continue Reading...'); ?></p>                </div> 
<?php $this->need('comments.php'); ?>
            </article>
        </div>
</div>
</main>
            </section>

<?php $this->need('footer.php'); ?>