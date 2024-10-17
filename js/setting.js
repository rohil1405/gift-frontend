$(function() {
  $(window).on("scroll", function() {
      if($(window).scrollTop() > 0) {
          $(".header-wrap").addClass("header-active");
         
      } else {
          $(".header-wrap").removeClass("header-active");
      }
  });
});

const open = document.querySelector(".menu-open");
const close = document.querySelector(".menu-close");
const show = document.querySelector('.menu-listing');
const body = document.body;
open.addEventListener('click',()=>{
    close.style.display="flex";
    open.style.display="none";
    show.style.display = 'block';
    body.style.overflow = 'hidden';
})
close.addEventListener('click',()=>{
    open.style.display="flex";
    close.style.display="none";
    show.style.display = 'none';
    body.style.overflow = 'visible'; 
});

$('.banner-slide').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 500,
  });

