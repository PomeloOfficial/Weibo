    <!-- 底部信息 -->
    <div id="footer" class="site-footer">
      <div class="inner textcenter">
        <div class="copyright">
          <span>Copyright &copy; 2018 <?php $this->options->title(); ?>. Powered by
            <a href="http://typecho.org/" title="Powered by Typecho)))">Typecho</a>. Theme By
            <a href="https://github.com/Rowingbohe/Weibo" title="Weibo">Weibo</a>.
            <span style="display: none;">
              <!-- 统计代码 -->
              <?php $this->options->optionFooter(); ?>
            </span>
          </span>
        </div>
      </div>
    </div>
    <!-- 滚回顶部 -->
    <div class="gotop bg show">
      <img src="<?php $this->options->themeUrl('images/scroll.png'); ?>" />
    </div>
    <script type="text/javascript" src="<?php $this->options->themeUrl('js/app.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/activate-power-mode.js'); ?>"></script>
  </body>
</html>