$(function() {
    var $elements = $('.block1.animateBlock.notAnimated'); //contains elements of nonAnimated class
    var $window = $(window);
    $window.on('scroll', function(e) {
        $elements.each(function(i, elem) { //loop through each element
            if ($(this).hasClass('animated')) // check if already animated
                return;
            animateMe($(this));
        });
    });
});

$(function() {
    var $elements = $('.block2.animateBlock.notAnimated'); //contains elements of nonAnimated class
    var $window = $(window);
    $window.on('scroll', function(e) {
        $elements.each(function(i, elem) { //loop through each element
            if ($(this).hasClass('animated')) // check if already animated
                return;
            animateMe($(this));
        });
    });
});

function animateMe(elem) {
    var winTop = $(window).scrollTop(); // calculate distance from top of window
    var winBottom = winTop + $(window).height();
    var elemTop = 3*($(elem).offset().top); // element distance from top of page
    var elemBottom = elemTop + $(elem).height();
    if ((elemBottom <= winBottom) && (elemTop >= winTop)) {
        // exchange classes if element visible
        $(elem).removeClass('notAnimated').addClass('animated');
    }
}
$('#h1').hover(function(){
    $('#u1').animate({
        width : '+=10em'
    },'slow');
},function(){
    $('#u1').animate({
        width : '-=10em'
    },'fast');
});
$('#h2').hover(function(){
    $('#u2').animate({
        width : '+=10em'
    },'slow');
},function(){
    $('#u2').animate({
        width : '-=10em'
    },'fast');
});
$('#h3').hover(function(){
    $('#u3').animate({
        width : '+=5em'
    },'slow');
},function(){
    $('#u3').animate({
        width : '-=5em'
    },'fast');
});
$('#h4').hover(function(){
    $('#u4').animate({
        width : '+=5em'
    },'slow');
},function(){
    $('#u4').animate({
        width : '-=5em'
    },'fast');
});
$('#h5').hover(function(){
    $('#u5').animate({
        width : '+=6em',
        left : '-=3em'
    },'slow');
},function(){
    $('#u5').animate({
        width : '-=6em',
        left : '+=3em'
    },'fast');
});
$('#h6').hover(function(){
    $('#u6').animate({
        width : '+=6em',
        left : '-=3em'
    },'slow');
},function(){
    $('#u6').animate({
        width : '-=6em',
        left : '+=3em'
    },'fast');
});

window.onscroll = function(e) {
    // print "false" if direction is down and "true" if up
    if(this.oldScroll <= this.scrollY){
        $('nav.navbar').addClass('scrolling-menu');
    }
    else{
        $('nav.navbar').removeClass('scrolling-menu');
    }
    this.oldScroll = this.scrollY;
}