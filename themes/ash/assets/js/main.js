(function($) {

	var windowWidth = $(window).width();
//matchHeightCol
if($('.mHc').length){
  $('.mHc').matchHeight();
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
if( $('.responsive-slider').length ){
    $('.responsive-slider').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}


var sticyMenubarSocialWidth = $('.sticy-menubar-social').width();
var offsetSocialWidth = ( windowWidth - sticyMenubarSocialWidth);
$('.sticy-menubar-btn').width(offsetSocialWidth);

function offsetSocialWidthCal(){
  windowWidth = $(window).width();
  var sticyMenubarSocialWidth = $('.sticy-menubar-social').width();
  var offsetSocialWidth = ( windowWidth - sticyMenubarSocialWidth);
  $('.sticy-menubar-btn').width(offsetSocialWidth);
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