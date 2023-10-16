$(document).ready(function () {
  $(".fa-plus").click(function () {
    $(".add-menu").toggleClass("active");
  });
});
$(document).ready(function () {
  $(".fa-sort-down").click(function () {
    $(".menu").toggleClass("active");
  });
});
$(document).ready(function () {
  $(".fa-caret-down").click(function () {
    $(this).next(".sub-menu").toggleClass("active");
  });
});
$(document).ready(function () {
  $(".sidebar-icon").click(function () {
    $(".sidebar").toggleClass("active");
    $(this).toggleClass("active");
  });
});
$(document).ready(function () {
  $("input[name='checkall']").click(function () {
    var checked = $(this).is(":checked");
    $(".table-checkall tbody tr td input:checkbox").prop("checked", checked);
  });
});
