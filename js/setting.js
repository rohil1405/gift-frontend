document.addEventListener("DOMContentLoaded", function() {
  function checkHeaderState() {
    const headerWrap = document.querySelector(".header-wrap");
    const isFooter = document.body.classList.contains('footer-main-footer');
    const isHeader = document.body.classList.contains('header-main-header');

    if (isFooter || isHeader) {
      headerWrap.classList.add('header-active');
    } else {
      if (window.scrollY > 0) {
        headerWrap.classList.add("header-active");
      } else {
        headerWrap.classList.remove("header-active");
      }
    }
  }

  checkHeaderState();
  window.addEventListener("scroll", checkHeaderState);
});



$(document).ready(function(){
	$(document).on('mouseover','.cta-btn a, .cta-form-btn, .btn-accept , .btn-close', function(e){
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
  centerPadding: '60px',
  cssEase: 'linear',
  autoplaySpeed: 2000,
  prevArrow: $('.bg-next-arrow'), 
  nextArrow: $('.bg-prev-arrow'),
});

$('.review-slider').slick({
  infinite: false,
  speed: 1400,
  dots: true,
  autoplay: false,
  slidesToShow: 2,
  slidesToScroll: 1,
  cssEase: 'linear',
  arrows: true,  
  prevArrow: $('.custom-prev-arrow'), 
  nextArrow: $('.custom-next-arrow'),
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 1,
      }
    },
    {
      breakpoint: 767,
      settings: {
        centerMode: true,
        centerPadding: '20px',
        slidesToShow: 1,
      }
    },
  ]
});

$('.gift-collaboration-slide').slick({
  infinite: false,
  speed: 1400,
  dots: true,
  autoplay: false,
  slidesToShow: 5,
  slidesToScroll: 1,
  cssEase: 'linear',
  arrows: true,  
  prevArrow: $('.custom-prev-arrow'), 
  nextArrow: $('.custom-next-arrow'),
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 3,
      }
    },
  ]
});




$('.banner-slider').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  // autoplay: true,
  autoplaySpeed: 0,  
  variableWidth: true,
  speed: 3000, 
  dots: false,
  infinite: true,  
  cssEase: 'linear', 
  centerPadding: '20px',
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
  variableWidth: true,
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





$(document).ready(function () {
  function initSlick() {
    if ($(window).width() < 767) {
      $('.our-events-slide').slick({
        slidesToShow: 1,
        slidesToScroll: 1,           
        centerPadding: '40px', 
        infinite: false,
        dots: true,
        arrows: true,
        autoplay: false,
        autoplaySpeed: 2000,
        prevArrow: $('.custom-prev-arrow'), 
        nextArrow: $('.custom-next-arrow'),
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

  function formatNumber(value) {
      return value >= 1000 ? (value / 1000).toFixed(1) + 'k' : value;
  }

  function startCounter() {
      if (isSectionVisible() && !counterStarted) {
        $('.count').each(function () {
          $(this).prop('Counter', 0).animate({
              Counter: $(this).text()
          }, {
              duration: 3000,
              easing: 'swing',
              step: function (now) {
                  $(this).text($(this).text().includes('.') ? now.toFixed(1) : Math.ceil(now));
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

const optionMenus = document.querySelectorAll(".select-menu");

optionMenus.forEach((menu) => {
  const selectBtn = menu.querySelector(".select-btn");
  const options = menu.querySelectorAll(".options-listing li");
  const selectText = menu.querySelector(".select-text");

  selectBtn.addEventListener("click", () => {
    menu.classList.toggle("active");

    optionMenus.forEach((otherMenu) => {
      if (otherMenu !== menu) {
        otherMenu.classList.remove("active");
      }
    });
  });

  options.forEach((option) => {
    option.addEventListener("click", () => {
      let selectedOption = option.innerText;
      selectText.innerText = selectedOption;
      menu.classList.remove("active");
    });
  });
});

document.addEventListener("click", (event) => {
  if (!event.target.closest(".select-menu")) {
    optionMenus.forEach((menu) => menu.classList.remove("active"));
  }
});






