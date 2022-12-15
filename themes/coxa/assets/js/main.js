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
if(windowWidth <=767){
    if( $('ul > li.menu-item-has-children').length ){
      $('ul > li.menu-item-has-children').click(function(){
       $(this).find('.sub-menu').slideToggle(300);
       $(this).toggleClass('sub-menu-arrow');
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



var swiper = new Swiper('.catagorySlider', {
    slidesPerView: 1,
    loop: true,
    navigation: {
      nextEl: '.catagorySlider-arrows .swiper-button-next',
      prevEl: '.catagorySlider-arrows .swiper-button-prev',
    },
    breakpoints: {
       639: {
        slidesPerView: 2,
        spaceBetween: 0,
      },
      991: {
        slidesPerView: 3,
        spaceBetween: 0,
      },
      1199: {
        loop: false,
        slidesPerView: 4,
        spaceBetween: 0,
      },
      1920: {
        loop: false,
        slidesPerView: 4,
        spaceBetween: 0,
      },
    }
  });

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


/*---- RS ----*/ 








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
    });
}
if( $('.bannerBgSlider2').length ){
    $('.bannerBgSlider2').slick({
      dots: false,
      infinite: true,
      autoplay: true,
      fade:true,
      arrows: true,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 1,
      slidesToScroll: 1,
      nextArrow: '.bnr-right2',
      prevArrow: '.bnr-left2',
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
            slidesToScroll: 1
          }
        }
      ]
    });
}

$(".slick-current").prev().addClass('prevdiv');
$('.treatmentSlider').on('afterChange', function(){
    $(".slick-current").prev().removeClass('nextdiv').addClass('prevdiv');
});


if( $('.treatment-sec').length ){
  var conW = $('.container').width();
  var conLW2 = windowWidth - conW;
  var conLW = conLW2 / 2;
  $('.treatment-cntlr').css('margin-left', conLW);
}
$(window).resize(function(){
  var windowWidth2 = $(window).width();
  if( $('.treatment-sec').length ){
  var conW = $('.container').width();
  var conLW2 = windowWidth2 - conW;
  var conLW = conLW2 / 2;
  $('.treatment-cntlr').css('margin-left', conLW);
}
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


// $('#onepagenav').onePageNav({
//   currentClass: 'active',
//   changeHash: false,
//   scrollSpeed: 750,
//   scrollThreshold: 0.5,
//   filter: '',
// });

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




/*---- NZ ----*/ 
 $('.faq-accordion-hdr').on('click', function(){ 
    $(this).parents('.faq-accordion-menu').toggleClass('active');
    $(this).parents('.faq-grd').siblings().find('.faq-accordion-menu').removeClass('active'); 
    $(this).parents('.faq-grd').find('.faq-accordion-des').slideToggle(300);
    $(this).parents('.faq-grd').siblings().find('.faq-accordion-des').slideUp(300);  
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

$(function(){
  var animateTime = 500,
      button = $('.review-pro-des-btn button');
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
})
 //Function to animate height: auto 
function autoHeightAnimate(element, time){
    var curHeight = element.height(), // Get Default Height
        autoHeight = element.css('height', 'auto').height(); // Get Auto Height
        element.height(curHeight); // Reset to Default Height
        element.stop().animate({ height: autoHeight }, time); // Animate to Auto Height
}

/*---- SK ----*/ 

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
      nextArrow: '.revw-right',
      prevArrow: '.revw-left',
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
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



/*---- MSI ----*/ 
if( $('.teamGrdSlider').length ){
    $('.teamGrdSlider').slick({
      dots: true,
      arrows: true,
      infinite: false,
      autoplay: false,
      autoplaySpeed: 4000,
      speed: 700,
      slidesToShow: 3,
      slidesToScroll: 1
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
            infinite: true,
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




/*---- MIN ----*/ 
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


$('#contact-select2').select2();
$('#contact-select3').select2();



new WOW().init();

})(jQuery);