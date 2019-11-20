function startNews(){
    $('#news li:first').slideUp(function(){
        $(this).appendTo($('#news')).slideDown();
    });
}
function stopNews(){
    clearInterval(interval);
}
$(document).ready(function(){
    interval = setInterval(startNews,4000);
    $('#news').hover(function(){
        stopNews();
    },function(){
        interval = setInterval(startNews,4000);
    });
});