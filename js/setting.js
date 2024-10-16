$(function() {
  $(window).on("scroll", function() {
      if($(window).scrollTop() > 0) {
          $(".header-wrap").addClass("header-active");
         
      } else {
          $(".header-wrap").removeClass("header-active");
      }
  });
});