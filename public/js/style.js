
$(document).ready(function () {
  $(".fa-bars").click(function () {
    $(".nav-menu").slideToggle();
  });
  $(window).scroll(function () {
    $(".nav-menu").slideUp();
  });
  $(window).resize(function () {
    $(".nav-menu").slideUp();
  });
});
$(document).ready(function () {
  $(".icon-1").click(function () {
    $(".sub-nav-menu").slideToggle();
    $(this).toggleClass("active");
  });
  $(".icon-2").click(function () {
    $(this).toggleClass("active");
    $(this).next(".sub").slideToggle();
  });
  function hide_menu() {
    $(".sub-nav-menu").slideUp();
    $(".sub").slideUp();
    $(".fa-angle-down").removeClass("active");
  }
  $(window).scroll(function () {
    hide_menu();
  });
  $(window).resize(function () {
    hide_menu();
  });
});
$(document).ready(function () {
  $(window).scroll(function () {
    if($(this).scrollTop()) {
      $("#backtop").fadeIn();
    } else {
      $("#backtop").fadeOut();
    }
  });
  $("#backtop").click(function () {
    $("html , body").animate(
      {
        scrollTop: 0,
      },
      500
    );
  });
});
