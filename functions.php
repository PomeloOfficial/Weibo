<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

// 主题设置
function themeConfig($form) {
    echo '<p style="font-size:14px;">
        <span style="display: block; margin-bottom: 10px; margin-top: 10px; font-size: 16px;">Weibo主题后台</span>
        相关链接：<a href="https://github.com/Rowingbohe/Weibo" target="_blank" style="color:#3384da;font-weight:bold;text-decoration:underline">Github</a>&nbsp;<a href="https://forum.typecho.love/d/2" target="_blank" style="color:#3384da;font-weight:bold;text-decoration:underline">官方网站</a>&nbsp;<a href="https://blog.20d.win" target="_blank" style="color:#3384da;font-weight:bold;text-decoration:underline">作者博客</a>&nbsp;<a href="https://github.com/Rowingbohe/Weibo/issues" target="_blank" style="color:#3384da;font-weight:bold;text-decoration:underline">提交反馈(Github Issues)</a><br>
        感谢赞助/支持：<a href="https://www.typecho.download" target="_blank">Typecho Download</a> <br>';
    echo '当前版本：2.5 最新版本：<img src="https://img.shields.io/github/release/Rowingbohe/Weibo.svg?style=flat-square"><br>';
    echo '</p>';

    $headImgUrl = new Typecho_Widget_Helper_Form_Element_Text('headImgUrl', NULL, NULL, _t('头像地址'), _t('在这里填入头像的URL地址，它会显示在你的头部资料卡和每条微博前，如：https://blog.20d.win/image/headimg3.jpg'));
    $form->addInput($headImgUrl);
  
    $ROWINGBOHE = new Typecho_Widget_Helper_Form_Element_Radio('ROWINGBOHE',
        array(
            '0' => _t('文章第一张图片，若没有图片则选取本地随机图（请把文件上传到主题目录下的/images/random/，图片格式为.jpg，并把缩略图数量填在下方【随机图数量】内。若想更改它们，请修改functions.php。注意：选取此项可能会让你的站很卡，因为这需要加载很多图片。） <br />'),
            '1' => _t('仅使用本地随机图（请把文件上传到主题目录下的/images/random/，图片格式为.jpg，并把缩略图数量填在下方【缩略图数量】内。若想更改目录和格式的限制，请修改functions.php。注意：选取此项可能会让你的站很卡，因为这需要加载很多图片。） <br />'),
            '2' => _t('文章第一张图片，若没有图片则指定一张图片做大图（链接填在下方【文章无图时的大图链接】 <br />'),
            '3' => _t('指定一张图片做大图（链接填在下方【文章无图时的大图链接】） <br />'),
        ),

        '1', _t('首页大图样式'), _t("首页文章列表第一张大图样式")
    );
    $form->addInput($ROWINGBOHE);
    $randomNum = new Typecho_Widget_Helper_Form_Element_Text('randomNum', NULL, NULL, _t('随机图数量'), _t('如果首页大图样式选了第一或者二项，在这填写大图数量'));
    $form->addInput($randomNum);
    $ROWINGBOHEUrl = new Typecho_Widget_Helper_Form_Element_Text('ROWINGBOHEUrl', NULL, NULL, _t('文章无图时的大图链接'), _t('如果首页大图样式选了第三或者第四项，在这填写链接'));
    $form->addInput($ROWINGBOHEUrl);


    $registerOpen = new Typecho_Widget_Helper_Form_Element_Radio('registerOpen',
        array(
            '0' => _t('是 <br />'),
            '1' => _t('否 <br />'),
        ),

        '1', _t('注册按钮是否显示'), _t("在用户未登录的时候，默认右上角有一个Sign up（注册）按钮（您可以打开浏览器的无痕模式查看），在这里选择是否显示。如果您未启用注册功能，请选择“否”。注册功能是Typecho内置的，设置地址：domain/admin/options-general.php")
    );
    $form->addInput($registerOpen);
  
    $faviconUrl = new Typecho_Widget_Helper_Form_Element_Text('faviconUrl', NULL, NULL, _t('favicon.ico图标链接'), _t('它会显示在你的浏览器任务栏里'));
    $form->addInput($faviconUrl);
    $bgUrl = new Typecho_Widget_Helper_Form_Element_Text('bgUrl', NULL, NULL, _t('背景图片链接'), _t('在这里填入背景链接'));
    $form->addInput($bgUrl);
    $cardBgUrl = new Typecho_Widget_Helper_Form_Element_Text('cardBgUrl', NULL, NULL, _t('顶部卡片背景图片链接'), _t('在这里填入顶部卡片的背景链接'));
    $form->addInput($cardBgUrl);

    $commentCustom1 = new Typecho_Widget_Helper_Form_Element_Text('commentCustom1', NULL, NULL, _t('评论框内提示内容'), _t('比如：还不赶快说些什么呀~'));
    $form->addInput($commentCustom1);
    $commentCustom2 = new Typecho_Widget_Helper_Form_Element_Text('commentCustom2', NULL, NULL, _t('发送按钮文字'), _t('比如：发送~'));
    $form->addInput($commentCustom2);

    $yourNickname = new Typecho_Widget_Helper_Form_Element_Text('yourNickname', NULL, NULL, _t('昵称'), _t('在这里填入君の名は，它会显示在你的头部资料卡和每条微博前，如：薄荷小屋'));
    $form->addInput($yourNickname);
    $yourDescription = new Typecho_Widget_Helper_Form_Element_Text('yourDescription', NULL, NULL, _t('简介'), _t('在这里填入你的简介，它会显示在你的头部资料卡里，如：一个很弱很弱的小萌新'));
    $form->addInput($yourDescription);
    $verified = new Typecho_Widget_Helper_Form_Element_Text('verified', NULL, NULL, _t('认证信息'), _t('在这里填入认证信息，它会显示在你的左侧资料卡里，如：辣鸡薄荷的个人微(Bo)博(Ke)'));
    $form->addInput($verified);
    $levelNumber = new Typecho_Widget_Helper_Form_Element_Text('levelNumber', NULL, NULL, _t('微博等级'), _t('微博等级可自由设置，它会显示在你的左侧资料卡里，如：20'));
    $form->addInput($levelNumber);
    $yourPlace = new Typecho_Widget_Helper_Form_Element_Text('yourPlace', NULL, NULL, _t('居住地'), _t('在这里填入你的居住地，它会显示在你的左侧资料卡里，如：天朝 魔都'));
    $form->addInput($yourPlace);
    $yourBirthday = new Typecho_Widget_Helper_Form_Element_Text('yourBirthday', NULL, NULL, _t('生日'), _t('在这里填入你的生日，它会显示在你的左侧资料卡里，如：8月17日'));
    $form->addInput($yourBirthday);
    $readMore = new Typecho_Widget_Helper_Form_Element_Text('readMore', NULL, NULL, _t('查看更多指向链接'), _t('在这里填入侧边栏“查看更多”的指向链接，它会显示在你的左侧资料卡里'));
    $form->addInput($readMore);

    $profileText1 = new Typecho_Widget_Helper_Form_Element_Text('profileText1', NULL, NULL, _t('资料卡关注按钮文字'), _t('资料卡里关注按钮的文字'));
    $form->addInput($profileText1);
    $profileLink1 = new Typecho_Widget_Helper_Form_Element_Text('profileLink1', NULL, NULL, _t('资料卡关注按钮鼠标悬停后的图片链接'), _t('资料卡的关注按钮鼠标悬停后会有一个图片，在这里填写图片链接（推荐填写一个二维码的链接）'));
    $form->addInput($profileLink1);
    $profileText2 = new Typecho_Widget_Helper_Form_Element_Text('profileText2', NULL, NULL, _t('资料卡第二个按钮的文字'), _t('资料卡里第二个按钮的文字'));
    $form->addInput($profileText2);
    $profileLink2 = new Typecho_Widget_Helper_Form_Element_Text('profileLink2', NULL, NULL, _t('资料卡第二个按钮的链接'), _t('资料卡里第二个按钮是点击跳转链接的，在这填写链接'));
    $form->addInput($profileLink2);

    $yourMenuText1 = new Typecho_Widget_Helper_Form_Element_Text('yourMenuText1', NULL, NULL, _t('资料卡☰下的第一个按钮的文字'), _t('资料卡☰下的第一个按钮的文字'));
    $form->addInput($yourMenuText1);
    $yourMenuText2 = new Typecho_Widget_Helper_Form_Element_Text('yourMenuText2', NULL, NULL, _t('资料卡☰下的第二个按钮的文字'), _t('资料卡☰下的第二个按钮的文字'));
    $form->addInput($yourMenuText2);
    $yourMenuText3 = new Typecho_Widget_Helper_Form_Element_Text('yourMenuText3', NULL, NULL, _t('资料卡☰下的第三个按钮的文字'), _t('资料卡☰下的第三个按钮的文字'));
    $form->addInput($yourMenuText3);
    $yourMenuText4 = new Typecho_Widget_Helper_Form_Element_Text('yourMenuText4', NULL, NULL, _t('资料卡☰下的第四个按钮的文字'), _t('资料卡☰下的第四个按钮的文字（如需增加或减少菜单请自行修改header.php）'));
    $form->addInput($yourMenuText4);
    $yourMenuLink1 = new Typecho_Widget_Helper_Form_Element_Text('yourMenuLink1', NULL, NULL, _t('资料卡☰下的第一个按钮的链接'), _t('资料卡☰下的第一个按钮的链接'));
    $form->addInput($yourMenuLink1);
    $yourMenuLink2 = new Typecho_Widget_Helper_Form_Element_Text('yourMenuLink2', NULL, NULL, _t('资料卡☰下的第二个按钮的链接'), _t('资料卡☰下的第二个按钮的链接'));
    $form->addInput($yourMenuLink2);
    $yourMenuLink3 = new Typecho_Widget_Helper_Form_Element_Text('yourMenuLink3', NULL, NULL, _t('资料卡☰下的第三个按钮的链接'), _t('资料卡☰下的第三个按钮的链接'));
    $form->addInput($yourMenuLink3);
    $yourMenuLink4 = new Typecho_Widget_Helper_Form_Element_Text('yourMenuLink4', NULL, NULL, _t('资料卡☰下的第四个按钮的链接'), _t('资料卡☰下的第四个按钮的链接（如需增加或减少菜单请自行修改header.php）'));
    $form->addInput($yourMenuLink4);

    $Menu1text = new Typecho_Widget_Helper_Form_Element_Text('Menu1text', NULL, NULL, _t('上方选项卡文字1'), _t('上方选项卡第一格的文字'));
    $form->addInput($Menu1text);
    $Menu2text = new Typecho_Widget_Helper_Form_Element_Text('Menu2text', NULL, NULL, _t('上方选项卡文字2'), _t('上方选项卡第二格的文字'));
    $form->addInput($Menu2text);
    $Menu3text = new Typecho_Widget_Helper_Form_Element_Text('Menu3text', NULL, NULL, _t('上方选项卡文字3'), _t('上方选项卡第三格的文字'));
    $form->addInput($Menu3text);
    $Menu4text = new Typecho_Widget_Helper_Form_Element_Text('Menu4text', NULL, NULL, _t('上方选项卡文字4'), _t('上方选项卡第四格的文字'));
    $form->addInput($Menu4text);
    $Menu5text = new Typecho_Widget_Helper_Form_Element_Text('Menu5text', NULL, NULL, _t('上方选项卡文字5'), _t('上方选项卡第五格的文字（如需增加或减少菜单请自行修改header.php）'));
    $form->addInput($Menu5text);

    $Menu1icon = new Typecho_Widget_Helper_Form_Element_Text('Menu1icon', NULL, NULL, _t('上方选项卡图标1'), _t('上方选项卡第一格的图标代码。你可以在 u.nu/94si 找到图标代码。请把包括i和/i标签的完整代码粘贴到这里'));
    $form->addInput($Menu1icon);
    $Menu2icon = new Typecho_Widget_Helper_Form_Element_Text('Menu2icon', NULL, NULL, _t('上方选项卡图标2'), _t('上方选项卡第二格的图标代码。你可以在 u.nu/94si 找到图标代码。请把包括i和/i标签的完整代码粘贴到这里'));
    $form->addInput($Menu2icon);
    $Menu3icon = new Typecho_Widget_Helper_Form_Element_Text('Menu3icon', NULL, NULL, _t('上方选项卡图标3'), _t('上方选项卡第三格的图标代码。你可以在 u.nu/94si 找到图标代码。请把包括i和/i标签的完整代码粘贴到这里'));
    $form->addInput($Menu3icon);
    $Menu4icon = new Typecho_Widget_Helper_Form_Element_Text('Menu4icon', NULL, NULL, _t('上方选项卡图标4'), _t('上方选项卡第四格的图标代码。你可以在 u.nu/94si 找到图标代码。请把包括i和/i标签的完整代码粘贴到这里'));
    $form->addInput($Menu4icon);
    $Menu5icon = new Typecho_Widget_Helper_Form_Element_Text('Menu5icon', NULL, NULL, _t('上方选项卡图标5'), _t('上方选项卡第五格的图标代码。你可以在 u.nu/94si 找到图标代码。请把包括i和/i标签的完整代码粘贴到这里'));
    $form->addInput($Menu5icon);
  
    $Menu1link = new Typecho_Widget_Helper_Form_Element_Text('Menu1link', NULL, NULL, _t('上方选项卡链接1'), _t('上方选项卡第一格的链接'));
    $form->addInput($Menu1link);
    $Menu2link = new Typecho_Widget_Helper_Form_Element_Text('Menu2link', NULL, NULL, _t('上方选项卡链接2'), _t('上方选项卡第二格的链接'));
    $form->addInput($Menu2link);
    $Menu3link = new Typecho_Widget_Helper_Form_Element_Text('Menu3link', NULL, NULL, _t('上方选项卡链接3'), _t('上方选项卡第三格的链接'));
    $form->addInput($Menu3link);
    $Menu4link = new Typecho_Widget_Helper_Form_Element_Text('Menu4link', NULL, NULL, _t('上方选项卡链接4'), _t('上方选项卡第四格的链接'));
    $form->addInput($Menu4link);
    $Menu5link = new Typecho_Widget_Helper_Form_Element_Text('Menu5link', NULL, NULL, _t('上方选项卡链接5'), _t('上方选项卡第五格的链接（如需增加或减少菜单请自行修改header.php）'));
    $form->addInput($Menu5link);
  
    $optionHeader = new Typecho_Widget_Helper_Form_Element_Textarea('optionHeader', NULL, NULL, _t('自定义Header'), _t('插入自定义Header内容，可用于验证百度站长资源平台等。拖动右下角小三角可以调整文本框大小'));
    $form->addInput($optionHeader);
    $optionFooter = new Typecho_Widget_Helper_Form_Element_Textarea('optionFooter', NULL, NULL, _t('自定义Footer'), _t('插入自定义Footer内容，可用于放置统计代码、验证360网站安全平台等。拖动右下角小三角可以调整文本框大小'));
    $form->addInput($optionFooter);

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
    $rand = rand(1,$ranNum);
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
    $rand = rand(1,$ranNum);
    $random = $widget->widget('Widget_Options')->themeUrl . '/images/random/' . $rand . '.jpg'; // 随机大图路径
    echo $random;

}


/** 输出文章大图-头图+单张 */
function showThumbnail3($widget)
{ 
    // 当文章无图片时的默认大图
    $ranNum = $widget->widget('Widget_Options')->randomNum;
    $rand = rand(1,$ranNum);
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