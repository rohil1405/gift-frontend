document.addEventListener("DOMContentLoaded", function() {
  function checkHeaderState() {
      if (window.scrollY > 0 || document.documentElement.scrollHeight <= window.innerHeight) {
          document.querySelector(".header-wrap").classList.add("header-active");
      } else {
          document.querySelector(".header-wrap").classList.remove("header-active");
      }
  }

  checkHeaderState();
  window.addEventListener("scroll", checkHeaderState);
  window.addEventListener("resize", checkHeaderState);
});



$(document).ready(function(){
	$(document).on('mouseover','.cta-btn a', function(e){
      $btn = $(this);
			var $offset = $(this).offset();
      $span = $('<span/>');
			var x = e.pageX - $offset.left
			var y = e.pageY - $offset.top;
      $span.addClass('ripple-span');
			$span.css({
         top: y +'px',
         left: x +'px',
			});
      $btn.append($span);
      window.setTimeout(function() {
        $span.remove();
      },1000);
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
  speed: 1400,
  dots: true,
  arrows: true,
  autoplay: false,
  cssEase: 'linear',
  autoplaySpeed: 2000,
  nextArrow: '<button type="button" class="slick-next bg-next-arrow"></button>',
        prevArrow: '<button type="button" class="slick-prev bg-prev-arrow"></button>',
});

$('.gift-collaboration-slide').slick({
  dots: true,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: false,
  cssEase: 'linear',
  autoplaySpeed: 2000,
  centerMode: true,
  arrows: true,  
  nextArrow: '<button type="button" class="slick-next custom-next-arrow"></button>',
  prevArrow: '<button type="button" class="slick-prev custom-prev-arrow"></button>',
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 475,
      settings: {
        slidesToShow: 1
      }
    }
  ]
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
  arrows: false,
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
  centerPadding: '2px',
  arrows: false,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 5
      }
    },
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4
      }
    },
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 475,
      settings: {
        slidesToShow: 1
      }
    },
  ]
});


$('.our-events-slide, .gift-collaboration-slide').on('afterChange', function(event, slick, currentSlide) {
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

  initSlick();
  $(window).resize(function () {
    initSlick();
  });
});




$(document).ready(function() {
  function isSectionVisible() {
      var sectionTop = $('.our-founder-wrap').offset().top;
      var sectionHeight = $('.our-founder-wrap').outerHeight();
      var windowTop = $(window).scrollTop();
      var windowHeight = $(window).height();

      return windowTop + windowHeight > sectionTop && windowTop < sectionTop + sectionHeight;
  }

  var counterStarted = false;

  function startCounter() {
      if (isSectionVisible() && !counterStarted) {
          $(' .counter').each(function() {
              $(this).prop('Counter', 0).animate({
                  Counter: $(this).text()
              }, {
                  duration: 4000,
                  easing: 'swing',
                  step: function(now) {
                      $(this).text(Math.ceil(now));
                  }
              });
          });
          counterStarted = true; 
      }
  }

  $(window).on('scroll', function() {
      startCounter();
  });

  startCounter();
});

document.addEventListener('DOMContentLoaded', function() {
  const cookiePreferences = document.querySelector('.cookie-preferences');
  const acceptAll = document.querySelector('.privacy-cookies-wrap');

  if (sessionStorage.getItem('cookiesAccepted') === 'true') {
    acceptAll.classList.add('close');
  }

  document.querySelector('.privacy-cookies-footer a').addEventListener('click', function(e) {
    e.preventDefault();
    cookiePreferences.classList.toggle('active');

    const cookiesContent = document.querySelector('.cookies-content');
    if (window.innerWidth <= 767) {
      if (cookiePreferences.classList.contains('active')) {
        cookiesContent.style.display = 'none';
    } else {
        cookiesContent.style.display = 'block';
    }
    }
   
  });
  

  document.querySelector('.close-btn').addEventListener('click', function(e) {
    e.preventDefault();
    acceptAll.classList.add('close');
  });

  document.querySelector('.btn-accept').addEventListener('click', function(e) {
    e.preventDefault();
    acceptAll.classList.add('close');
    sessionStorage.setItem('cookiesAccepted', 'true'); 
  });
});





