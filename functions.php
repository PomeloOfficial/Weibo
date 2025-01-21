<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

// 主题设置
function themeConfig($form) {

    $str1 = explode('/themes/', Helper::options()->themeUrl);
    $str2 = explode('/', $str1[1]);
    $name = $str2[0];
    $db = Typecho_Db::get();
    $sjdq = $db->fetchRow($db->select()->from('table.options')->where('name = ?', 'theme:' . $name));
    $ysj = $sjdq['value'];
    if (isset($_POST['type'])) {
        if ($_POST["type"] == "备份模板设置数据") {
            if ($db->fetchRow($db->select()->from('table.options')->where('name = ?', 'theme:' . $name . 'bf'))) {
                $update = $db->update('table.options')->rows(array('value' => $ysj))->where('name = ?', 'theme:' . $name . 'bf');
                $updateRows = $db->query($update);
                echo '<div>备份已更新，请等待自动刷新，或';
?>
                <a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">点击刷新</a></div>
                <script language="JavaScript">
                    window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);
                </script>
                <?php
            } else {
                if ($ysj) {
                    $insert = $db->insert('table.options')
                        ->rows(array('name' => 'theme:' . $name . 'bf', 'user' => '0', 'value' => $ysj));
                    $insertId = $db->query($insert);
                    echo '<div>备份完成，请等待自动刷新，或';
                ?>
                    <a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">点击刷新</a></div>
                    <script language="JavaScript">
                        window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);
                    </script>
                <?php
                }
            }
        }
        if ($_POST["type"] == "还原模板设置数据") {
            if ($db->fetchRow($db->select()->from('table.options')->where('name = ?', 'theme:' . $name . 'bf'))) {
                $sjdub = $db->fetchRow($db->select()->from('table.options')->where('name = ?', 'theme:' . $name . 'bf'));
                $bsj = $sjdub['value'];
                $update = $db->update('table.options')->rows(array('value' => $bsj))->where('name = ?', 'theme:' . $name);
                $updateRows = $db->query($update);
                echo '<div>检测到模板备份数据，恢复完成，请等待自动刷新，或';
                ?>
                <a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">点击刷新</a></div>
                <script language="JavaScript">
                    window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2000);
                </script>
            <?php
            } else {
                echo '<div>没有模板备份数据，恢复不了哦！</div>';
            }
        }
        if ($_POST["type"] == "删除备份数据") {
            if ($db->fetchRow($db->select()->from('table.options')->where('name = ?', 'theme:' . $name . 'bf'))) {
                $delete = $db->delete('table.options')->where('name = ?', 'theme:' . $name . 'bf');
                $deletedRows = $db->query($delete);
                echo '<div>删除成功，请等待自动刷新，如果等不到请点击';
            ?>
                <a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
                <script language="JavaScript">
                    window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);
                </script>
<?php
            } else {
                echo '<div>当前不存在备份</div>';
            }
        }
    };
    echo '<p style="font-size:14px;">
        <span style="display: block; margin-bottom: 10px; margin-top: 10px; font-size: 20px;">Weibo主题后台</span>
        相关链接：<a href="https://github.com/PomeloOfficial/Weibo" target="_blank" style="color:#3384da;font-weight:bold;text-decoration:underline">GitHub仓库</a>&nbsp;<a href="https://weibo.rowingbohe.com" target="_blank" style="color:#3384da;font-weight:bold;text-decoration:underline">主题文档</a>&nbsp;<a href="https://blog.rowingbohe.com" target="_blank" style="color:#3384da;font-weight:bold;text-decoration:underline">作者博客</a>&nbsp;<a href="https://github.com/PomeloOfficial/Weibo/issues" target="_blank" style="color:#3384da;font-weight:bold;text-decoration:underline">提交反馈(GitHub Issues)</a><br>';
    echo '当前版本：3.0 最新版本：<img src="https://img.shields.io/github/release/PomeloOfficial/Weibo.svg?style=flat-square"><br>';
    echo '
    <form class="protected home" action="?' . $name . 'bf" method="post">
    <input type="submit" name="type" class="btn btn-s" value="备份模板设置数据" />  <input type="submit" name="type" class="btn btn-s" value="还原模板设置数据" />  <input type="submit" name="type" class="btn btn-s" value="删除备份数据" /></form>';
    echo '</p>';

    $headImgUrl = new \Typecho\Widget\Helper\Form\Element\Text('headImgUrl', NULL, 'https://q1.qlogo.cn/g?b=qq&nk=723326663&s=640', _t('头像地址'), _t('在这里填入头像的URL地址，它会显示在你的头部资料卡和每条微博前。默认使用QQ头像API（https://q1.qlogo.cn/g?b=qq&nk=QQ号&s=640），可将上方作者QQ号替换为你的QQ号；也可替换为其他图片链接'));
    $form->addInput($headImgUrl);
    $faviconUrl = new \Typecho\Widget\Helper\Form\Element\Text('faviconUrl', NULL, NULL, _t('favicon.ico图标链接'), _t('它会显示在你的浏览器任务栏里；不填写则默认使用主题目录下images/favicon.ico，也可直接替换该文件'));
    $form->addInput($faviconUrl);
  
    $ROWINGBOHE = new \Typecho\Widget\Helper\Form\Element\Radio('ROWINGBOHE',
        array(
            '0' => _t('文章第一张图片，若没有图片则选取本地随机图<br>'),
            '1' => _t('仅使用本地随机图<br>'),
            '2' => _t('文章第一张图片，若没有图片则指定一张图片做大图<br>'),
            '3' => _t('指定一张图片做大图<br>'),
            '4' => _t('关闭首页大图<br>'),
        ),

        '1', _t('首页大图样式'), _t("首页文章列表第一张大图样式。<br>选择第1项或第2项，需同步修改下方“随机图数量”，并将随机图库上传到主题目录下的/images/random/文件夹，文件名格式为数字 + .jpg；<br>选择第3项或第4项，需同步修改下方“大图链接”。<br>注意：选取第1或第2项需要加载较多图片，可能会使访问速度变慢。")
    );
    $form->addInput($ROWINGBOHE);
    $randomNum = new \Typecho\Widget\Helper\Form\Element\Text('randomNum', NULL, '5', _t('随机图数量'), _t('如果首页大图样式选了第一或者二项，在这填写大图数量'));
    $form->addInput($randomNum);
    $ROWINGBOHEUrl = new \Typecho\Widget\Helper\Form\Element\Text('ROWINGBOHEUrl', NULL, NULL, _t('大图链接'), _t('如果首页大图样式选了第三或者第四项，在这填写链接'));
    $form->addInput($ROWINGBOHEUrl);

    $menuContent = new \Typecho\Widget\Helper\Form\Element\Textarea('menuContent', NULL, 
    '<li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>主页</a></li>',
    _t('导航栏左侧菜单配置'), _t('一行为一个按钮，格式为： &lt;li&gt;&lt;a href="对应链接"&gt;&lt;i&gt;图标代码&lt;/i&gt;菜单名称&lt;/a&gt;&lt;/li&gt;<br>主题已内置Font Awesome V4，可直接使用，可以在 <a href="https://fontawesome.com.cn/v4/icons">https://fontawesome.com.cn/v4/icons</a> 找到图标代码。你也可以自行引入其他图标库后使用。拖动右下角小三角可以调整文本框大小'));
    $form->addInput($menuContent);
    $searchOpen = new \Typecho\Widget\Helper\Form\Element\Radio('searchOpen',
        array(
            '0' => _t('是 <br />'),
            '1' => _t('否 <br />'),
        ),

        '0', _t('是否显示搜索框'), _t("顶部导航栏默认展示搜索框，可选择是否显示。")
    );
    $form->addInput($searchOpen);
    $loginButtonOpen = new \Typecho\Widget\Helper\Form\Element\Radio('loginButtonOpen',
        array(
            '0' => _t('是 <br />'),
            '1' => _t('否 <br />'),
        ),

        '0', _t('是否显示登录按钮'), _t("顶部导航栏默认展示登录按钮（登录状态下展示登出、后台两个按钮），可选择是否显示。")
    );
    $form->addInput($loginButtonOpen);
    $registerOpen = new \Typecho\Widget\Helper\Form\Element\Radio('registerOpen',
        array(
            '0' => _t('是 <br />'),
            '1' => _t('否 <br />'),
        ),

        '1', _t('是否显示注册按钮'), _t("用户未登录时在顶部导航栏展示“Sign up”按钮，可选择是否显示。如未启用注册功能，请选择“否”。")
    );
    $form->addInput($registerOpen);

    $bgUrl = new \Typecho\Widget\Helper\Form\Element\Text('bgUrl', NULL, NULL, _t('背景图片链接'), _t('在这里填入背景图片链接；不填则使用主题目录下images/bg.jpg，也可直接替换该文件'));
    $form->addInput($bgUrl);
    $cardBgUrl = new \Typecho\Widget\Helper\Form\Element\Text('cardBgUrl', NULL, NULL, _t('顶部卡片背景图片链接'), _t('在这里填入顶部卡片的背景链接；不填则使用主题目录下images/cardBg.jpg，也可直接替换该文件'));
    $form->addInput($cardBgUrl);

    $yourNickname = new \Typecho\Widget\Helper\Form\Element\Text('yourNickname', NULL, NULL, _t('昵称'), _t('在这里填入君の名は，它会显示在你的头部资料卡里，不填则使用系统设置内的站点名称'));
    $form->addInput($yourNickname);
    $yourDescription = new \Typecho\Widget\Helper\Form\Element\Text('yourDescription', NULL, NULL, _t('简介'), _t('在这里填入你的简介，它会显示在你的头部资料卡里；不填则显示系统设置内的站点简介'));
    $form->addInput($yourDescription);
    $verified = new \Typecho\Widget\Helper\Form\Element\Text('verified', NULL, '我的官方博客', _t('认证信息'), _t('在这里填入认证信息，它会显示在你的左侧资料卡里'));
    $form->addInput($verified);
    $levelNumber = new \Typecho\Widget\Helper\Form\Element\Text('levelNumber', NULL, '20', _t('微博等级'), _t('微博等级可自由设置，它会显示在你的左侧资料卡里'));
    $form->addInput($levelNumber);
    $yourPlace = new \Typecho\Widget\Helper\Form\Element\Text('yourPlace', NULL, '中国', _t('居住地'), _t('在这里填入你的居住地，它会显示在你的左侧资料卡里'));
    $form->addInput($yourPlace);
    $yourBirthday = new \Typecho\Widget\Helper\Form\Element\Text('yourBirthday', NULL, '8月17日', _t('生日'), _t('在这里填入你的生日，它会显示在你的左侧资料卡里'));
    $form->addInput($yourBirthday);
    $readMore = new \Typecho\Widget\Helper\Form\Element\Text('readMore', NULL, NULL, _t('查看更多指向链接'), _t('在这里填入侧边栏“查看更多”的指向链接，它会显示在你的左侧资料卡里'));
    $form->addInput($readMore);

    $profileText1 = new \Typecho\Widget\Helper\Form\Element\Text('profileText1', NULL, 'WeChat', _t('资料卡第一个按钮的文字'), _t('资料卡里关注按钮的文字'));
    $form->addInput($profileText1);
    $profileLink1 = new \Typecho\Widget\Helper\Form\Element\Text('profileLink1', NULL, NULL, _t('资料卡第一个按钮鼠标悬停后的图片链接'), _t('资料卡的关注按钮鼠标悬停后会有一个图片，在这里填写图片链接（推荐填写一个二维码的链接）；不填则使用主题目录下images/qrcode.jpg，也可直接替换该文件'));
    $form->addInput($profileLink1);
    $profileText2 = new \Typecho\Widget\Helper\Form\Element\Text('profileText2', NULL, 'About Me', _t('资料卡第二个按钮的文字'), _t('资料卡里第二个按钮的文字'));
    $form->addInput($profileText2);
    $profileLink2 = new \Typecho\Widget\Helper\Form\Element\Text('profileLink2', NULL, NULL, _t('资料卡第二个按钮的链接'), _t('资料卡里第二个按钮是点击跳转链接的，在这填写链接'));
    $form->addInput($profileLink2);
    $yourMenuContent = new \Typecho\Widget\Helper\Form\Element\Textarea('yourMenuContent', NULL, 
    '<li><a href="#">主页</a></li>',
    _t('资料卡“☰”菜单展开按钮配置'), _t('一行为一个按钮，格式为： &lt;li&gt;&lt;a href="对应链接"&gt;&菜单名称&lt;/a&gt;&lt;/li&gt;<br>拖动右下角小三角可以调整文本框大小'));
    $form->addInput($yourMenuContent);
  
    $commentCustom1 = new \Typecho\Widget\Helper\Form\Element\Text('commentCustom1', NULL, '还不赶快说些什么呀', _t('评论框内提示内容'), _t(''));
    $form->addInput($commentCustom1);
    $commentCustom2 = new \Typecho\Widget\Helper\Form\Element\Text('commentCustom2', NULL, '发送', _t('发送评论按钮文字'), _t(''));
    $form->addInput($commentCustom2);
	
    $optionHeader = new \Typecho\Widget\Helper\Form\Element\Textarea('optionHeader', NULL, NULL, _t('自定义Header'), _t('插入自定义Header内容，可用于引入其他资源等。拖动右下角小三角可以调整文本框大小'));
    $form->addInput($optionHeader);
    $optionFooter = new \Typecho\Widget\Helper\Form\Element\Textarea('optionFooter', NULL, NULL, _t('自定义Footer'), _t('插入自定义Footer内容，可用于放置统计代码等。拖动右下角小三角可以调整文本框大小'));
    $form->addInput($optionFooter);
    $myFooter = new \Typecho\Widget\Helper\Form\Element\Textarea('myFooter', NULL, NULL, _t('自定义网站页脚内容'), _t('插入自定义网站页脚内容，可用于放置备案号等。与版权信息同行显示。拖动右下角小三角可以调整文本框大小'));
    $form->addInput($myFooter);

}

// 获取浏览次数(by https://blog.iplayloli.com/4341.html)
function getViewsStr($widget, $format = "{views}") {
    $fields = unserialize($widget->fields);
    if (array_key_exists('views', $fields))
        $views = (!empty($fields['views'])) ? intval($fields['views']) : 0;
    else
        $views = 0;
    
    //增加浏览次数
    if ($widget->is('single')) {
        $vieweds = Typecho_Cookie::get('contents_viewed');
        if (empty($vieweds))
            $vieweds = array();
        else
            $vieweds = explode(',', $vieweds);
        if (!in_array($widget->cid, $vieweds)) {
            $views = $views + 1;
            $widget->setField('views', 'str', strval($views), $widget->cid);
            $vieweds[] = $widget->cid;
            $vieweds = implode(',', $vieweds);
            Typecho_Cookie::set("contents_viewed",$vieweds);
        }
    }
    return str_replace("{views}", $views, $format);
}

/** 输出文章大图-头图+随机 */
function showThumbnail1($widget)
{ 
    // 当文章无图片时的默认大图
    $ranNum = $widget->widget('Widget_Options')->randomNum;
    $rand = rand(1,(int)$ranNum);
    $random = $widget->widget('Widget_Options')->themeUrl . '/images/random/' . $rand . '.jpg'; // 随机大图路径

    $attach = $widget->attachments(1)->attachment;
    $pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i'; 
    $patternMD = '/\!\[.*?\]\((http(s)?:\/\/.*?(jpg|png))/i';
    $patternMDfoot = '/\[.*?\]:\s*(http(s)?:\/\/.*?(jpg|png))/i';

 if ($attach && $attach->isImage) {
      echo $attach->url; 
    } else
if (preg_match_all($pattern, $widget->content, $thumbUrl)) {
         echo $thumbUrl[1][0];
    }
//如果是内联式markdown格式的图片
    else if (preg_match_all($patternMD, $widget->content, $thumbUrl)) {
      echo $thumbUrl[1][0];
    }
    //如果是脚注式markdown格式的图片
    else if (preg_match_all($patternMDfoot, $widget->content, $thumbUrl)) {
      echo $thumbUrl[1][0];
    }
 else{
echo $random;
}

}

/** 输出文章大图-随机 */
function showThumbnail2($widget)
{ 
    // 当文章无图片时的默认大图
    $ranNum = $widget->widget('Widget_Options')->randomNum;
    $rand = rand(1,(int)$ranNum);
    $random = $widget->widget('Widget_Options')->themeUrl . '/images/random/' . $rand . '.jpg'; // 随机大图路径
    echo $random;

}


/** 输出文章大图-头图+单张 */
function showThumbnail3($widget)
{ 
    // 当文章无图片时的默认大图
    $ranNum = $widget->widget('Widget_Options')->randomNum;
    $rand = rand(1,(int)$ranNum);
    $random = $widget->widget('Widget_Options')->ROWINGBOHEUrl; 

    $attach = $widget->attachments(1)->attachment;
    $pattern = '/\<img.*?src\=\"(.*?)\"[^>]*>/i'; 
    $patternMD = '/\!\[.*?\]\((http(s)?:\/\/.*?(jpg|png))/i';
    $patternMDfoot = '/\[.*?\]:\s*(http(s)?:\/\/.*?(jpg|png))/i';

 if ($attach && $attach->isImage) {
      echo $attach->url; 
    } else
if (preg_match_all($pattern, $widget->content, $thumbUrl)) {
         echo $thumbUrl[1][0];
    }
//如果是内联式markdown格式的图片
    else if (preg_match_all($patternMD, $widget->content, $thumbUrl)) {
      echo $thumbUrl[1][0];
    }
    //如果是脚注式markdown格式的图片
    else if (preg_match_all($patternMDfoot, $widget->content, $thumbUrl)) {
      echo $thumbUrl[1][0];
    }
 else{
echo $random;
}

}