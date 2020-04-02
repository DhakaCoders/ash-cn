(function($) {

	var windowWidth = $(window).width();
//matchHeightCol
if($('.mHc').length){
  $('.mHc').matchHeight();
};
if($('.hm-main-con-cntlr #pg-21-1.panel-grid .panel-grid-cell .so-widget-sow-image .widget-title').length){
  $('.hm-main-con-cntlr #pg-21-1.panel-grid .panel-grid-cell .so-widget-sow-image .widget-title').matchHeight();
};


//$('[data-toggle="tooltip"]').tooltip();

//banner animation
$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  $('.page-banner-bg').css({
    '-webkit-transform' : 'scale(' + (1 + scroll/2000) + ')',
    '-moz-transform'    : 'scale(' + (1 + scroll/2000) + ')',
    '-ms-transform'     : 'scale(' + (1 + scroll/2000) + ')',
    '-o-transform'      : 'scale(' + (1 + scroll/2000) + ')',
    'transform'         : 'scale(' + (1 + scroll/2000) + ')'
  });
});


if($('.fancybox').length){
$('.fancybox').fancybox({
    //openEffect  : 'none',
    //closeEffect : 'none'
  });

}


/**
Responsive on 767px
*/

// if (windowWidth <= 767) {
  $('.toggle-btn').on('click', function(){
    $(this).toggleClass('menu-expend');
    $('.toggle-bar ul').slideToggle(500);
  });


// }


/**
Slick slider
*/
/*if( $('.mainBnrSlider').length ){
    $('.mainBnrSlider').slick({
      dots: false,
      arrows: false,
      infinite: false,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1
    });
}*/


var sticyMenubarSocialWidth = $('.sticy-menubar-social').outerWidth();
var offsetSocialWidth = ( windowWidth - sticyMenubarSocialWidth);
var offsetSocialWidth2 = (offsetSocialWidth - 2 );
$('.sticy-menubar-btn').width(offsetSocialWidth2);

function offsetSocialWidthCal(){
  windowWidth = $(window).width();
  var sticyMenubarSocialWidth = $('.sticy-menubar-social').outerWidth();
  var offsetSocialWidth = ( windowWidth - sticyMenubarSocialWidth);
  var offsetSocialWidth2 = (offsetSocialWidth - 2 );
  $('.sticy-menubar-btn').width(offsetSocialWidth2);
}
offsetSocialWidthCal();
$(window).on('resize', function(){
  offsetSocialWidthCal();
});



$('.sticy-menubar-btn').on('click', function(){
  $('.main-nav-sm').addClass('main-nav-sm-active');
  $('li.menu-item-has-children > a').on('click', function(e){
    e.preventDefault();
    $(this).next().slideToggle();
    $(this).toggleClass('sub-menu-expend');
  });
});

$('.close-btn').on('click', function(){
  $('.main-nav-sm').removeClass('main-nav-sm-active');
});








})(jQuery);