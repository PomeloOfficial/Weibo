      <section id="contents" class="width">
        <!-- 侧边栏 -->
        <aside id="aside" class="left">
          <div class="inner">
            <div class="sns web-info">
              <li class="frinum">
              <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
                <a href="javascript:void(0)"><?php echo $stat->PublishedPostsNum ?>
                  <span>文章</span></a>
              </li>
              <li class="vitnum">
                <a href="javascript:void(0)"><?php echo $stat->PublishedCommentsNum ?>
                  <span>评论</span></a>
              </li>
              <li class="ptnum">
                <a href="javascript:void(0)"><?php echo $stat->categoriesNum ?>
                  <span>分类</span></a>
              </li>
            </div>
            <div class="sns master-info">
              <div class="person-info">
                <p class="verify clearfix">
                  <span class="weibo_renz tips-top" aria-label="微博认证" style="background-image:url(<?php $this->options->themeUrl('images/icon.png'); ?>"></span>
                  <a class="master_lev tips-top" aria-label="当前等级:LV.<?php $this->options->levelNumber() ?>" href="javascript:void(0);">
                    <span>LV.<?php $this->options->levelNumber() ?></span></a>
                </p>
                <p class="info"><?php $this->options->verified() ?></p></div>
              <ul class="m_info-items">
                <li class="item">
                  <i class="icon louie-location"></i>
                  <span class="tips-right" aria-label="我在<?php $this->options->yourPlace() ?>，你在哪里?">居住地：<?php $this->options->yourPlace() ?></span></li>
                <li class="item">
                  <i class="icon louie-time-o"></i>
                  <span class="tips-right" aria-label="我的生日：<?php $this->options->yourBirthday() ?>">生日：<?php $this->options->yourBirthday() ?></span></li>
                <li class="item">
                  <i class="icon louie-smiling"></i>
                  <span class="tips-right" aria-label="<?php $this->options->yourDescription() ?>">简介：<?php $this->options->yourDescription() ?></span></li>
                <li class="item last">
                  <i class="icon louie-link-o"></i>
                  <a class="tips-right" aria-label="个性域名" href="<?php $this->options->siteUrl(); ?>" target="_blank">个性域名：<?php $this->options->siteUrl(); ?></a></li>
              </ul>
            <div class="sns readmore">
                <a href="<?php $this->options->readMore() ?>">查看更多&nbsp;&gt;</a>
            </div>

            <div class="alteration">
              <div class="widget">
                <h3 class="widget-title">
                  <i class="icon louie-notice"></i>他们抢着跟我说这些</h3>
                <div class="textwidget">
                <!-- 评论 -->
                  <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
                  <ul class="items hot-comment">
                    <?php while($comments->next()): ?>
                    <li class="item">
                      <div class="image">
                        <?php $comments->gravatar('100', ''); ?></div>
                      <div class="info">
                        <h4 class="title nowarp"><?php $comments->author(); ?></h4>
                        <div class="meta">
                          <a class="hot-comment-link" href="<?php $comments->permalink(); ?>">
                            <p><?php $comments->excerpt(20, '[...]'); ?></p>
                          </a>
                        </div>
                      </div>
                    </li>
                    <?php endwhile; ?>
                  </ul>
                <!-- 评论结束 -->
                </div>
              </div>
            <?php if (class_exists("Links_Plugin")): ?>
              <div class="widget">
                <h3 class="widget-title">
                  <i class="icon icon louie-smile"></i>左邻右舍</h3>
                <ul class="items hot-comment">
                <!-- 友链 -->
                <?php Links_Plugin::output('
                  <li class="item">
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
              </div>
<?php endif; ?>
          </div>
        </aside>
        <!-- 侧边栏结束 -->