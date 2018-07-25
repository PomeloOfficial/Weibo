App = {
	//鼠标事件
	mouseEvent:function() {
		// 滚动
	    $('#directory-content a[href*="#"]:not([href="#"])').click(function() {
	        if ( location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname ) {
	            var target = $(this.hash);
	            target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
	            if (target.length) {
	                $("html, body").animate({
	                        scrollTop: target.offset().top - 80
	                    },
	                    500
	                );
	                return false;
	            }
	        }
	    });
	},


	gotop:function() {
		var offset = 400,
		scroll_top_duration = 500,
		$back_to_top = $('.gotop');
		$(window).scroll(function() {
			( $(this).scrollTop() > offset ) ? $back_to_top.addClass('show') : $back_to_top.removeClass('show');
		});
		$back_to_top.on('click', function(event){
			event.preventDefault();
			$('body,html').animate({
			    scrollTop: 0 ,
			    }, scroll_top_duration
			);
		});
	},
}
App.gotop();
App.mouseEvent();
document.body.oncopy=function(){alert("复制成功！若要转载请务必保留原文链接，申明来源，谢谢合作！");}

setInterval(function() {
options.offed();console.log(toTest);
console.clear && console.clear();
  
//输出
window.onload=function(){
  console.log("%c又JB来偷我代码？？？","color: #0069D6 !important;font-size:14px;");
  console.log("%c%c作者%cRowingbohe","line-height:28px;","line-height:28px;padding:4px;background:#0cc;color:#fff;font-size:14px;","color:#0cc;line-height:28px;font-size:14px;padding:4px 15px;background:#f8f8f8;");
  console.log("%c%c地址%chttps://blog.20d.win","line-height:28px;","line-height:28px;padding:4px;background:#222;color:#fff;font-size:14px;margin-right:15px","color:#000;line-height:28px;font-size:14px;");
  console.log("%c%c主题%cWeibo-on-Typecho","line-height:28px;","line-height:28px;padding:4px;background:#25b15e;color:#fff;font-size:14px;margin-right:15px","color:#25b15e;line-height:28px;font-size:14px;");
  console.log("%c%c地址%chttps://github.com/rowingbohe/weibo","line-height:28px;","line-height:28px;padding:4px;background:#58666e;color:#fff;font-size:14px;margin-right:15px","color:#58666e;line-height:28px;font-size:14px;");
}