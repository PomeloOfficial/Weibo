    <!-- 底部信息 -->
    <div id="footer" class="site-footer">
      <div class="inner textcenter">
        <div class="copyright">
          <span>Copyright &copy; 2018 <?php $this->options->title(); ?>. Powered by
            <a href="http://typecho.org/" title="Powered by Typecho)))" target="_blank">Typecho</a>. Theme By
            <a href="https://forum.typecho.love/d/2" title="Weibo" target="_blank">Weibo</a> & <a href="https://blog.20d.win" target="_blank">Rowingbohe</a>. 
              <!-- 统计代码 -->
              <?php $this->options->optionFooter(); ?>
          </span>
        </div>
      </div>
    </div>
    <!-- 滚回顶部 -->
    <div class="gotop bg show">
      <img src="<?php $this->options->themeUrl('images/scroll.png'); ?>" />
    </div>
    <script type="text/javascript" src="<?php $this->options->themeUrl('js/appli.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('js/activatepowermode.js'); ?>"></script>
  </body>
</html>