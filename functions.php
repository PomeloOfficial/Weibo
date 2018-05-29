<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $headImgUrl = new Typecho_Widget_Helper_Form_Element_Text('headImgUrl', NULL, NULL, _t('头像地址'), _t('在这里填入头像的URL地址，它会显示在你的头部资料卡和每条微博前，如：https://blog.20d.win/image/headimg3.jpg'));
    $form->addInput($headImgUrl);
  
    $registerOpen = new Typecho_Widget_Helper_Form_Element_Radio('registerOpen',
        array(
            '0' => _t('是 <br />'),
            '1' => _t('否 <br />'),
        ),

        '1', _t('注册按钮是否显示'), _t("在用户未登录的时候，默认右上角有一个Sign up（注册）按钮（您可以打开浏览器的无痕模式查看），在这里选择是否显示。如果您未启用注册功能，请选择“否”。")
    );
    $form->addInput($registerOpen);
  
    $faviconUrl = new Typecho_Widget_Helper_Form_Element_Text('faviconUrl', NULL, NULL, _t('favicon.ico图标链接'), _t('它会显示在你的浏览器任务栏里'));
    $form->addInput($faviconUrl);
    $bgUrl = new Typecho_Widget_Helper_Form_Element_Text('bgUrl', NULL, NULL, _t('背景图片链接'), _t('在这里填入背景链接'));
    $form->addInput($bgUrl);

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
    $followNumber = new Typecho_Widget_Helper_Form_Element_Text('followNumber', NULL, NULL, _t('关注数'), _t('关注数可自由设置，它会显示在你的左侧资料卡里，如：233'));
    $form->addInput($followNumber);
    $levelNumber = new Typecho_Widget_Helper_Form_Element_Text('levelNumber', NULL, NULL, _t('微博等级'), _t('微博等级可自由设置，它会显示在你的左侧资料卡里，如：20'));
    $form->addInput($levelNumber);
    $yourPlace = new Typecho_Widget_Helper_Form_Element_Text('yourPlace', NULL, NULL, _t('居住地'), _t('在这里填入你的居住地，它会显示在你的左侧资料卡里，如：天朝 魔都'));
    $form->addInput($yourPlace);
    $yourBirthday = new Typecho_Widget_Helper_Form_Element_Text('yourBirthday', NULL, NULL, _t('生日'), _t('在这里填入你的生日，它会显示在你的左侧资料卡里，如：8月17日'));
    $form->addInput($yourBirthday);
  
    $profileText1 = new Typecho_Widget_Helper_Form_Element_Text('profileText1', NULL, NULL, _t('资料卡关注按钮文字'), _t('资料卡里关注按钮的文字'));
    $form->addInput($profileText1);
    $profileLink1 = new Typecho_Widget_Helper_Form_Element_Text('profileLink1', NULL, NULL, _t('资料卡关注按钮鼠标悬停后的图片链接'), _t('资料卡的关注按钮鼠标悬停后会有一个图片，在这里填写图片链接（推荐填写二维码链接）'));
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