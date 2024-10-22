$(function() {
  $(window).on("scroll", function() {
      if($(window).scrollTop() > 0) {
          $(".header-wrap").addClass("header-active");
         
      } else {
          $(".header-wrap").removeClass("header-active");
      }
  });
});

const openBtn = document.querySelector(".menu-open");
const closeBtn = document.querySelector(".menu-close");
const menuListing = document.querySelector(".menu-listing");
const body = document.body;

openBtn.addEventListener("click", () => {
  menuListing.style.display = "block";
  menuListing.style.animation = "slideIn 0.3s linear";
  openBtn.style.display = "none";
  closeBtn.style.display = "flex";
  body.style.overflow = 'hidden';
  menuListing.style.backgroundImage = `url('./images/banner-pattern.png')`;
});

closeBtn.addEventListener("click", () => {
  menuListing.style.display = "none";
  openBtn.style.display = "flex";
  closeBtn.style.display = "none";
  body.style.overflow = 'visible'; 
});

window.addEventListener("resize", () => {
  if (window.innerWidth <= 991) {
    menuListing.style.display = "none";
    closeBtn.style.display = "none";
    openBtn.style.display = "flex";
    body.style.overflow = 'visible'; 
  } else {
    menuListing.style.display = "flex";
    closeBtn.style.display = "none";
    openBtn.style.display = "none";
    body.style.overflow = 'visible'; 

  }
});

$('.our-word-slide').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  infinite: true,
  centerPadding: '40px',
  dots: true,
  arrows: true,
  autoplay: false,
  cssEase: 'linear',
  autoplaySpeed: 2000,
  nextArrow: '<button type="button" class="slick-next bg-next-arrow"></button>',
        prevArrow: '<button type="button" class="slick-prev bg-prev-arrow"></button>',
});




$('.banner-slide').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 0,  
  speed: 3000, 
  dots: false,
  infinite: true,  
  cssEase: 'linear', 
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});

$('.our-instagram-slide').slick({
  slidesToShow: 6,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 0,
  speed: 3000, 
  dots: false,
  infinite: true,
  cssEase: 'linear',
  centerMode: true,
  centerPadding: '20px',
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1
      }
    }
  ]
});


$('.our-events-slide').on('afterChange', function(event, slick, currentSlide) {
  $('.custom-next-arrow').css('background-image', 'url("./images/next-arrow.png")');
  $('.custom-prev-arrow').css({
    'transform': 'rotate(0deg)',
    'background-image': 'url("./images/prev-arrow.png")'
  }).prop('disabled', true);

  if (currentSlide === 1 || currentSlide === 2) {
    $('.custom-prev-arrow').css({
      'transform': 'rotate(180deg)',
      'background-image': 'url("./images/next-arrow.png")' 
    }).prop('disabled', false);
  
    
    $('.custom-next-arrow').css({
      'background-image': 'url("./images/next-arrow.png")'
    });
  }
  
});



$(document).ready(function () {
  function initSlick() {
    if ($(window).width() < 1024) {
      $('.our-events-slide').slick({
        slidesToShow: 3,
        slidesToScroll: 1,           
        centerPadding: '40px', 
        infinite: true,
        dots: true,
        arrows: true,
        autoplay: false,
        autoplaySpeed: 2000,
        nextArrow: '<button type="button" class="slick-next custom-next-arrow"></button>',
        prevArrow: '<button type="button" class="slick-prev custom-prev-arrow"></button>',
        responsive: [
          {
            breakpoint: 767,
            settings: {
              centerPadding: '20px', 
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          }
        ]
      });
    } else {
      if ($('.our-events-slide').hasClass('slick-initialized')) {
        $('.our-events-slide').slick('unslick');
      }
    }
  }


  $(window).resize(function () {
    initSlick();
  });
});




  $(document).ready(function() {

    $('.counter').each(function () {
      $(this).prop('Counter',0).animate({
        Counter: $(this).text()
        }, {
          duration: 4000,
          easing: 'swing',
          step: function (now) {
          $(this).text(Math.ceil(now));
          }
        });
      });
    
    });

