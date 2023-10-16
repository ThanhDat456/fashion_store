$(document).ready(function () {
  // #1
  $(".thumb-img .thumb-img-item #item").click(function () {
    var picture_src = $(this).find("img").attr("src");
    $(".thumb-main img").attr("src", picture_src);
    $(".thumb-img .thumb-img-item #item").removeClass("active");
    $(this).addClass("active");
  });
  // #2
  $("#slide-nav .next-btn").click(function () {
    if ($(".thumb-img .thumb-img-item #item:last-child").hasClass("active")) {
      $(".thumb-img .thumb-img-item #item:first-child").click();
    } else {
      $(".thumb-img .thumb-img-item #item.active").next().click();
    }
  });
  $("#slide-nav .prev-btn").click(function () {
    if ($(".thumb-img .thumb-img-item #item:last-child").hasClass("active")) {
      $(".thumb-img .thumb-img-item #item:first-child").click();
    } else {
      $(".thumb-img .thumb-img-item #item.active").next().click();
    }
  });
});
