(function($) {
var windowWidth = $(window).width();

/*Google Map Style*/
var CustomMapStyles  = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]

$('.navbar-toggle').on('click', function(){
  $('#mobile-nav').slideToggle(300);
});

if( $('.hamburgar-cntlr').length ){
  $('.hamburgar-cntlr').click(function(){
    $('body').toggleClass('allWork');
  });
}
if(windowWidth <=991){
    if( $('.main-nav > ul > li').length ){
      $('.main-nav > ul > li').click(function(){
       $('.main-nav > ul > li.sub-menu-arrow').removeClass('sub-menu-arrow'); 
       $(this).toggleClass('sub-menu-arrow');
       $(this).find('.sub-menu').slideToggle(300);
       $(this).siblings().find('.sub-menu').slideUp(300);
     });
    }
}
var stickyOffset = $('.header').offset().top;
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if(scroll >= 200){
      $('body').addClass('fixed-header');
    }
    else{
      $('body').removeClass('fixed-header');
    }
    if(scroll >= 210){
      $('body').addClass('fixed-header-in');
    }
    else{
      $('body').removeClass('fixed-header-in');
    }
    if(scroll >= 300){
      $('body').addClass('fixed');
    }
    else{
      $('body').removeClass('fixed');
    }
  });


  if( $('.referral-to-bottom').length ){
    $('.referral-to-bottom').click(function(e){
      e.preventDefault();
      var scTo = $(this).data('to');
      $('html, body').animate({
        scrollTop: $(scTo).offset().top
      }, 10);
    });

  }
  if(windowWidth <=767){
    if( $('.fees-tab-inr').length ){
      $('.fees-tab-button').click(function(){
       $(this).toggleClass('fees-tab-arrow');
       $(this).next().slideToggle(300);
     });
      $('.fees-tab-inr ul li a').click(function(){
       var textval = $(this).text();
       $('.fees-tab-button span').empty().append(textval);
     });
    }
}
//matchHeightCol
if($('.mHc').length){
  $('.mHc').matchHeight();
};
if($('.mHc1').length){
  $('.mHc1').matchHeight();
};
if($('.mHc2').length){
  $('.mHc2').matchHeight();
};
if($('.mHc3').length){
  $('.mHc3').matchHeight();
};
if($('.mHc4').length){
  $('.mHc4').matchHeight();
};
if($('.mHc5').length){
  $('.mHc5').matchHeight();
};
if($('.mHc6').length){
  $('.mHc6').matchHeight();
};
$(window).load(function() {
//matchHeightCol
  if($('.mHc').length){
    $('.mHc').matchHeight();
  };
  if($('.mHc1').length){
    $('.mHc1').matchHeight();
  };
  if($('.mHc2').length){
    $('.mHc2').matchHeight();
  };
  if($('.mHc3').length){
    $('.mHc3').matchHeight();
  };
  if($('.mHc4').length){
    $('.mHc4').matchHeight();
  };
  if($('.mHc5').length){
    $('.mHc5').matchHeight();
  };
  if($('.mHc6').length){
    $('.mHc6').matchHeight();
  };
});

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
if (windowWidth >= 1600) {
  function determineNewHeight(originalHeight, originalWidth, newWidth){
    return (originalHeight / originalWidth) * newWidth;
  }
  function bgHeight(){
    $('.bg-imgH').each(function(){
      var itemWidth = $(this).width();
      var itemOH = $(this).attr('data-height');
      var itemOW = $(this).attr('data-width');
      var nHeight = determineNewHeight(itemOH, itemOW, itemWidth);
      $(this).css('height', nHeight);
    });
  }
  bgHeight();
  $(window).resize(function(){
    bgHeight();
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



// http://codepen.io/norman_pixelkings/pen/NNbqgG
// https://stackoverflow.com/questions/38686650/slick-slides-on-pagination-hover


/**
Slick slider
*/
if( $('.responsive-slider').length ){
    $('.responsive-slider').slick({
      dots: true,
      infinite: false,
      autoplay: true,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
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

/* slider custom prev and next control */
var responsiveSlider = $('.responsive-slider-cntlr').length;
if( windowWidth > 0 && responsiveSlider < 2 ){
    $('.mbc-team-slider-ctlr .mbc-slider-prev-nxt').hide();
}else if( windowWidth > 639 && responsiveSlider < 3 ){
    $('.mbc-team-slider-ctlr .mbc-slider-prev-nxt').hide();
}else if( windowWidth > 991 && responsiveSlider < 4 ){
    $('.mbc-team-slider-ctlr .mbc-slider-prev-nxt').hide();
}else if( windowWidth > 1199 && responsiveSlider < 5 ){
    $('.mbc-team-slider-ctlr .mbc-slider-prev-nxt').hide();
}else{

}



if( $('#mapID').length ){
var latitude = $('#mapID').data('latitude');
var longitude = $('#mapID').data('longitude');

var myCenter= new google.maps.LatLng(latitude,  longitude);
function initialize(){
    var mapProp = {
      center:myCenter,
      mapTypeControl:true,
      scrollwheel: false,
      zoomControl: true,
      disableDefaultUI: true,
      zoom:7,
      streetViewControl: false,
      rotateControl: true,
      mapTypeId:google.maps.MapTypeId.ROADMAP,
      styles: CustomMapStyles
      };

    var map= new google.maps.Map(document.getElementById('mapID'),mapProp);
    var marker= new google.maps.Marker({
      position:myCenter,
        //icon:'map-marker.png'
      });
    marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);

}






/* innerpage buttons */
$(".dft-fl-btn" ).each(function( index ) {
  var color = $(this).data('color');
  var bg = $(this).data('bg');
  var border = $(this).data('border');
  $(this).css('color', color);
  $(this).css('background', bg);
  $(this).css('border-color', border);
  $(this).on('mouseenter', function(){
    if( bg != ''){
      $(this).css('background', 'transparent');
      $(this).css('color', bg);
    }
    if( bg == ''){
      $(this).css('background', border);
      $(this).css('color', '#fff');
    }
  });
  $(this).on('mouseleave', function(){
    if( bg != ''){
      $(this).css('background', bg);
      $(this).css('color', color);
    }
    if( bg == ''){
      $(this).css('background', 'transparent');
      $(this).css('color', border);
    }
  });
});

if( $('.bannerBgSlider').length ){
    $('.bannerBgSlider').slick({
      dots: false,
      infinite: true,
      autoplay: true,
      arrows: true,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 1,
      slidesToScroll: 1,
      nextArrow: '.bnr-right',
      prevArrow: '.bnr-left',
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false
          }
        }
      ]
    });
}
if( $('.bannerBgSlider2').length ){
    $('.bannerBgSlider2').slick({
      dots: false,
      infinite: true,
      autoplay: true,
      fade:false,
      arrows: true,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 1,
      slidesToScroll: 1,
      nextArrow: '.bnr-right2',
      prevArrow: '.bnr-left2',
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false
          }
        }
      ]
    });
}
if( $('.treatmentSlider').length ){
    $('.treatmentSlider').slick({
      dots: false,
      infinite: true,
      autoplay: false,
      arrows: true,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 3,
      slidesToScroll: 1,
      nextArrow: '.arrow-right',
      prevArrow: '.arrow-left',
      responsive: [
        {
          breakpoint: 1800,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          }
        },
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true
          }
        }
      ]
    });
}

$(".slick-current").prev().addClass('prevdiv');
$('.treatmentSlider').on('afterChange', function(){
    $(".slick-current").prev().removeClass('nextdiv').addClass('prevdiv');
});


if( $('.tmreviewSlider').length ){
    $('.tmreviewSlider').slick({
      dots: true,
      arrows: true,
      infinite: false,
      autoplay: false,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 1,
      slidesToScroll: 1,
      nextArrow: '.revw-right',
      prevArrow: '.revw-left',
    });
}

if( $('.tlPatientReviewSlider').length ){
    $('.tlPatientReviewSlider').slick({
      dots: true,
      arrows: true,
      infinite: false,
      autoplay: false,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 2,
      slidesToScroll: 1,
      nextArrow: '.revw-right',
      prevArrow: '.revw-left',
    });
}

$('.faq-accordion-hdr').on('click', function(){ 
  $(this).parents('.faq-accordion-menu').toggleClass('active');
  $(this).parents('.faq-grd').siblings().find('.faq-accordion-menu').removeClass('active'); 
  $(this).parents('.faq-grd').find('.faq-accordion-des').slideToggle(300);
  $(this).parents('.faq-grd').siblings().find('.faq-accordion-des').slideUp(300);
  $('.faq-accordion-menu').removeClass('topactiove');
});

if( $('.reviewSlider2').length ){
    $('.reviewSlider2').slick({
      dots: true,
      arrows: true,
      infinite: false,
      autoplay: false,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 1,
      slidesToScroll: 1,
      nextArrow: '.revw-right',
      prevArrow: '.revw-left',
    });
}
$('.wpforms-container select').select2()

if( $('.tlPatientReviewSlider2').length ){
    $('.tlPatientReviewSlider2').slick({
      dots: true,
      arrows: true,
      infinite: false,
      autoplay: false,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 1,
      slidesToScroll: 1,
      nextArrow: '.revw-right',
      prevArrow: '.revw-left',
    });
}
$('.bnrparallaxie').parallaxie({
    speed:0.4,
    pos_x:'center',
    size: 'auto',
    offset: -140,
  });
$('.parallaxie').parallaxie({
    speed:0.4,
    pos_x:'center',

  });
if(windowWidth > 767){
  $(function(){
    var animateTime = 500,
    button = $('.review-pro-des-btn-col button');
    button.click(function(){
      $(this).parent().prev().css({'display':'block'});
      if($(this).parent().prev().height() === 148){
        autoHeightAnimate($(this).parent().prev(), animateTime);
      } else {
        $(this).parent().prev().css({'display':'-webkit-box'});
        $(this).parent().prev().stop().animate({ height: '148' }, animateTime);

      }
      if ( $(this).parent().prev().attr('data-status') == 'closed' ){
        $(this).text( $(this).attr('data-text-open') );
        $(this).parent().prev().attr('data-status', 'open');
      }else{
        $(this).text( $(this).attr('data-text-closed') );
        $(this).parent().prev().attr('data-status', 'closed');    }
      });
  });

  $(function(){
    var animateTime = 500,
    button = $('.review-pro-des-btn-col-3 button');
    button.click(function(){
      $(this).parent().prev().css({'display':'block'});
      if($(this).parent().prev().height() === 218){
        autoHeightAnimate($(this).parent().prev(), animateTime);
      } else {
        $(this).parent().prev().css({'display':'-webkit-box'});
        $(this).parent().prev().stop().animate({ height: '218' }, animateTime);

      }
      if ( $(this).parent().prev().attr('data-status') == 'closed' ){
        $(this).text( $(this).attr('data-text-open') );
        $(this).parent().prev().attr('data-status', 'open');
      }else{
        $(this).text( $(this).attr('data-text-closed') );
        $(this).parent().prev().attr('data-status', 'closed');    }
      });
  });

  $(function(){
    var animateTime = 500,
    button = $('.review-pro-des-btn-fullwidth button');
    button.click(function(){
      $(this).parent().prev().css({'display':'block'});
      if($(this).parent().prev().height() === 90){
        autoHeightAnimate($(this).parent().prev(), animateTime);
      } else {
        $(this).parent().prev().css({'display':'-webkit-box'});
        $(this).parent().prev().stop().animate({ height: '90' }, animateTime);

      }
      if ( $(this).parent().prev().attr('data-status') == 'closed' ){
        $(this).text( $(this).attr('data-text-open') );
        $(this).parent().prev().attr('data-status', 'open');
      }else{
        $(this).text( $(this).attr('data-text-closed') );
        $(this).parent().prev().attr('data-status', 'closed');    }
      });
  });
};
if(windowWidth <= 767){
  $(function(){
    var animateTime = 500,
    button = $('.review-pro-des-btn button');
    button.click(function(){
      $(this).parent().prev().css({'display':'block'});
      if($(this).parent().prev().height() === 220){
        autoHeightAnimate($(this).parent().prev(), animateTime);
      } else {
        $(this).parent().prev().css({'display':'-webkit-box'});
        $(this).parent().prev().stop().animate({ height: '220' }, animateTime);

      }
      if ( $(this).parent().prev().attr('data-status') == 'closed' ){
        $(this).text( $(this).attr('data-text-open') );
        $(this).parent().prev().attr('data-status', 'open');
      }else{
        $(this).text( $(this).attr('data-text-closed') );
        $(this).parent().prev().attr('data-status', 'closed');    }
      });
  });
};

 //Function to animate height: auto 
function autoHeightAnimate(element, time){
    var curHeight = element.height(), // Get Default Height
        autoHeight = element.css('height', 'auto').height(); // Get Auto Height
        element.height(curHeight); // Reset to Default Height
        element.stop().animate({ height: autoHeight }, time); // Animate to Auto Height
}
 

if( $('.reviewSlider').length ){
    $('.reviewSlider').slick({
      dots: true,
      arrows: true,
      infinite: false,
      autoplay: false,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 2,
      slidesToScroll: 1,
      nextArrow: '.review-grids-cntlr .revw-right',
      prevArrow: '.review-grids-cntlr .revw-left',
      responsive: [
        {
          breakpoint: 1300,
          settings: {
            arrows: false,
            dots: true
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true
          }
        }
      ]
    });
}
if( $('.locationSlider').length ){
    $('.locationSlider').slick({
      dots: true,
      arrows: true,
      infinite: false,
      autoplay: false,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 3,
      slidesToScroll: 1, 
      nextArrow: '.locations-sec-inner .revw-right',
      prevArrow: '.locations-sec-inner .revw-left',     
      responsive: [
        {
          breakpoint: 1300,
          settings: {
            arrows: false,
            dots: true
          }
        },
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            arrows: false,
            dots: true
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            dots: true
          }
        }
      ]
    });
}
if( $('.counter-number').length ){
  $('.counter-number').counterUp({
    delay: 15,
    time: 1500
  });
}

if( $('.teamGrdSlider').length ){
  $('.teamGrdSlider').slick({
    dots: true,
    arrows: true,
    infinite: false,
    autoplay: false,
    autoplaySpeed: 4000,
    speed: 700,
    slidesToShow: 3,
    slidesToScroll: 1,
    nextArrow: '.profile-module .revw-right',
    prevArrow: '.profile-module .revw-left',
    responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        dots: true
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true
      }
    }
    ]
  });
}
if( $('.patientReviewSlider').length ){
  $('.patientReviewSlider').slick({
    dots: true,
    arrows: true,
    infinite: false,
    autoplay: false,
    autoplaySpeed: 4000,
    speed: 700,
    slidesToShow: 1,
    slidesToScroll: 1,
    nextArrow: '.revw-right',
    prevArrow: '.revw-left',
  });
}

if( $('.reviewSliderGrd3').length ){
  $('.reviewSliderGrd3').slick({
    dots: true,
    arrows: true,
    infinite: false,
    autoplay: false,
    autoplaySpeed: 4000,
    speed: 700,
    slidesToShow: 3,
    slidesToScroll: 1,
    nextArrow: '.revw-right',
    prevArrow: '.revw-left',
    responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        dots: true
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true
      }
    }
    ]
  });
}

if( $('.afterBeforeEffect').length ){
  $('.afterBeforeEffect').each(function(index) {
    var afterBeforeEffectInduvidual = $(this);
    afterBeforeEffectInduvidual.twentytwenty({ 
        before_label: 'Before Treatment',
        after_label: 'After Treatment',
        click_to_move: true,
    });
  });
}


var windowHeighT = $(window).height();
var headerHeight = $('.header').outerHeight();
console.log(windowHeighT);
console.log(headerHeight);

var hmBnrH = windowHeighT - headerHeight;
console.log(hmBnrH);
if (windowWidth > 767) {
  if (windowHeighT > 650) {
    $('.banner-bg').css('height', hmBnrH);
  }
}

if (windowWidth > 767) {
  if (windowHeighT > 650) {
    $('.has_bg_content_slide .banner-cntlr').css('height', hmBnrH);
  }
}


if( $('#contact-select2').length ){
  $('#contact-select2').select2();
}

if( $('#contact-select3').length ){
  $('#contact-select3').select2();
}


function treatmentSecMrgnLft(){
  var windowWidth = $(window).width();
  var conW = $('.container').width();
  var conLW2 = windowWidth - conW;
  var conLW = conLW2 / 2;
  $('.treatment-cntlr').css('margin-left', conLW);
}
treatmentSecMrgnLft();
$(window).resize(function(){
  treatmentSecMrgnLft();
});

/* BS form Validator*/
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();





// var scrollArea = document.getElementById('body');
// var scrollIndicator = document.getElementById('indicator');
// var scrollHeight = 0;
// var scrollOffset = 0;
// var scrollPercent = 0;
// var indicatorPosition = scrollPercent;

// resize();

// function loop() {
//   scrollOffset = window.pageYOffset || window.scrollTop;
//   scrollPercent = scrollOffset/scrollHeight || 0;
//   indicatorPosition += (scrollPercent-indicatorPosition)*0.05;
//   var transformString = 'translateY('+(indicatorPosition*300)+'px)';
//   indicator.style.mozTransform = transformString;
//   indicator.style.webkitTransform = transformString;
//   indicator.style.transform = transformString;
  
//   requestAnimationFrame(loop);
// }

// loop();

// function resize() {
//   scrollHeight = window.innerHeight*4;
//   scrollArea.style.height = (window.innerHeight*5)+'px';
// }

// window.addEventListener('resize', resize);



/*var data = $('.gallery-page-con-cntlr .filte-button ul li a').attr('data-filter');
if(data == 'all'){
     $('.practice-gallery-grid-col').addClass('show');
}*/
$('.gallery-page-con-cntlr .filte-button ul li.type-normal a').on('click', function(e){ 
    e.preventDefault();
    var data = $(this).attr('data-filter');
    var targetCls = '.galler-sec .practice-gallery-grids .practice-gallery-grid-col '+'.'+data;
    $('.gallery-page-con-cntlr .filte-button ul li').removeClass('active');
    $(this).parent().addClass('active');

    $('.galler-sec .practice-gallery-grids .practice-gallery-grid-col, .galler-sec .after-before-grids-cntlr').hide();
    $('.galler-sec .practice-gallery-grids .practice-gallery-grid-col'+'.'+data).show();
    if(data == 'all'){
         $('.galler-sec .practice-gallery-grids .practice-gallery-grid-col').show();
    }
      
});
$('.gallery-page-con-cntlr .filte-button ul li.type-before-after a').on('click', function(e){ 
    e.preventDefault();
    var data = $(this).attr('data-filter');
    $('.gallery-page-con-cntlr .filte-button ul li').removeClass('active');
    $(this).parent().addClass('active');

    $('.galler-sec .practice-gallery-grids .practice-gallery-grid-col, .galler-sec .after-before-grids-cntlr').hide();
    $('.galler-sec .after-before-grids-cntlr'+'.'+data).show();
    if(data == 'all'){
         $('.galler-sec .practice-gallery-grids .practice-gallery-grid-col').show();
    }
      
});
$('.gallery-page-con-cntlr .filte-button ul li.type-all a').on('click', function(e){ 
    e.preventDefault();
    var data = $(this).attr('data-filter');
    if(data == 'all'){
        $('.galler-sec .practice-gallery-grids .practice-gallery-grid-col, .galler-sec .after-before-grids-cntlr').show();
    }
      
});

if(windowWidth >767){
var hdrtopoffset = $('.header-inr').height();
$('.fees-tab-inr ul li a').click(function(){
   $('.fees-module-cntlr').css("padding-top", hdrtopoffset+20); 
});
}

parallax();
})(jQuery);

function getTeamDetailsById(id){
  if(jQuery('#teamDetail').length){
    var hostName = window.location.origin;
    var ajax_url = hostName + '/clients/cox-hitchcock/wp-admin/admin-ajax.php';
    jQuery.ajax({
      type: 'POST',
      url: ajax_url,
      dataType: 'JSON',
      data: {
        action: 'get_team_detail_by_id',
        team_id: id,
        port: '01'
      },
      beforeSend:function(xhr){
        jQuery('#teamDetail').html('');
      },
      success: function(res) {
        console.log(res);
        if(typeof(res.team) != "undefined" && res.team != ''){
          function showLazyLoadingData(){
            jQuery('#teamDetail').html(res.team);
          }  
          setTimeout(showLazyLoadingData, 500)
        }else{
          jQuery('#teamDetail').html('<p>Something was wrong! Please try again.</p>');
        }
      },
      error: function(err) {
        console.error(err);
      }
    })
  }
  return false;
}

function parallax(){
  var wScroll = $(window).scrollTop();
  $('.parallax-window').css('background-position', 'left '+(wScroll+0.75)+'px');


}

$(function() {
/*    var $el = $('.parallax-background');
    $(window).on('scroll', function () {
        var scroll = $(document).scrollTop();
        $el.css({
            'background-position':'50% '+(-.4*scroll)+'px'
        });
    });*/

/*    function parallax(){
  var scrolled = $(window).scrollTop();
  $('.parallax-background').css({'transform':'translate(0px,'+scrolled /2+'%'});
  }*/



/*  $(window).scroll(function(e){
      parallax();
  });*/
});
$(window).on("scroll", function () {
  var parallax = $(".parallax");
  var scrollPosition = $(this).scrollTop();
  parallax.css("transform", "translateY(" + scrollPosition/3 + "px" + ")");
});