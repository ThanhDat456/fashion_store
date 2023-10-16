$(document).ready(function () {
  $(".chart").click(function () {
    $(".sidebar").toggleClass("active");
    $(this).toggleClass("active");
  });
});
$(document).ready(function () {
  $(".fa-caret-down").click(function () {
    $(this).next(".sub-menu-cat").slideToggle();
  });
});

