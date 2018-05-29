                <h3>&nbsp;&nbsp;&nbsp; <?php $this->commentsNum(_t('评论区(暂无评论)'), _t('评论区(仅有一条评论)'), _t('评论区(%d条评论)')); ?> </h3><hr>
    <?php $this->comments()->to($comments); ?>
        <?php while($comments->next()): ?>
<?php $comments->gravatar(50, ""); ?>
    <div class="com">
        <?php $comments->content(); ?>
        <p><a class="com-color" target="_blank" href="<?php $comments->url(); ?>"><?php $comments->author(); ?> </a><time><?php $comments->date('Y-m-d H:i'); ?></time> #<?php $comments->sequence(); ?></p> 
    </div>
<?php endwhile; ?>
<!-- 判断设置是否允许对当前文章进行评论 -->
<?php if($this->allow('comment')): ?>

<section id="respond" role="form""> 
    <div class="inner"> 
     <form action="<?php $this->commentUrl() ?>" method="post"> 
      <div class="comment-textarea error"> 
       <textarea class="textinput" id="comment" name="text" cols="45" rows="1" maxlength="65525" aria-required="true" required="required" tabindex="4" placeholder="<?php $this->options->commentCustom1(); ?>"><?php $this->remember('text'); ?></textarea> 
        <div class="clear"></div>
      <div class="author-info edit-on"> 
        <?php if($this->user->hasLogin()): ?>
            <!-- 显示当前登录用户的用户名以及登出连接 -->
            <p>Logged in as <a href="<?php $this->options->adminUrl(); ?>"><?php $this->user->screenName(); ?></a>. 
            <a href="<?php $this->options->index('Logout.do'); ?>" title="Logout">Logout &raquo;</a></p>
        <!-- 若当前用户未登录 -->
        <?php else: ?>

       <input type="text" name="author" class="textinput" size="35" tabindex="1" required="required" placeholder="昵称"" />
       <input type="text" name="mail" class="textinput" size="35" tabindex="2" placeholder="邮箱 (选填)"" />
       <input type="text" name="url" class="textinput" size="35" tabindex="3" size="35" tabindex="2" placeholder="个人主页地址 (选填)"" />
<?php endif; ?>
      </div>
      <ul class="comment-submit"> 
       <li class="middle"> <button name="submit" type="submit" id="button" class="push-status" tabindex="5"><?php $this->options->commentCustom2(); ?></button> </li> 
      </ul>
     </form>
    </div>
</section>
            </article>
        </div>
</div>
</main>
            </section>
<?php endif; ?>
        </div>