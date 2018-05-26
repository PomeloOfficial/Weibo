
var OriginTitile = document.title;
var titleTime;
document.addEventListener('visibilitychange', function() {
    if (document.hidden) {
        document.title = '(´O｀)喔哟，崩溃啦！ ';
        clearTimeout(titleTime);
    }
    else {
        document.title = '(/≧▽≦/)咦！又好了！';
        titleTime = setTimeout(function() {
            document.title = OriginTitile;
        }, 3000);
    }
});