    <!-- 底部信息 -->
    <div id="footer" class="site-footer">
      <div class="inner textcenter">
        <div class="copyright">
          <span>Copyright &copy; <?php $currentYear = intval(date('Y')); echo $currentYear; ?> <?php $this->options->title(); ?>. Powered by
            <a href="http://typecho.org/" title="Powered by Typecho)))" target="_blank">Typecho</a>. Theme By
            <a href="https://weibo.rowingbohe.com" title="Weibo" target="_blank">Weibo</a>. <?php $this->options->myFooter(); ?>
          </span>
        </div>
      </div>
    </div>
    <!-- 滚回顶部 -->
    <div class="gotop bg show">
      <img src="<?php $this->options->themeUrl('images/scroll.png'); ?>" />
    </div>
    <?php $this->options->optionFooter(); ?>
    <?php $this->footer(); ?>
    <script type="text/javascript" src="<?php $this->options->themeUrl('js/app.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/activate-power-mode.js'); ?>"></script>
  </body>
</html>