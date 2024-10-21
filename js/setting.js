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



$('.banner-slide').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    speed: 3000,
    dots: false,
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

