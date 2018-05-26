/*
 * Application js
 */


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