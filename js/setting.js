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
  body.classList.add("no-scroll");
});

closeBtn.addEventListener("click", () => {
  menuListing.style.display = "none";
  openBtn.style.display = "flex";
  closeBtn.style.display = "none";
  body.classList.remove("no-scroll");
});

window.addEventListener("resize", () => {
  if (window.innerWidth <= 991) {
    menuListing.style.display = "none";
    closeBtn.style.display = "none";
    openBtn.style.display = "flex";
    body.classList.remove("no-scroll"); 
  } else {
    menuListing.style.display = "flex";
    closeBtn.style.display = "none";
    openBtn.style.display = "none";
    body.classList.remove("no-scroll");
  }
});



$('.banner-slide').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    speed: 300,
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

