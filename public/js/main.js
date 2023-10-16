$(document).ready(function () {
  $(".tab-content-item").hide();
  $(".tab-content-item:first-child").show();

  $(".nav-tabs li .tab-item").click(function () {
    $(".nav-tabs li .tab-item").removeClass("active");
    $(this).addClass("active");
    
    let id_tab_content_item = $(this).find("a").attr("href");
  

    $(".tab-content-item").hide();
    $(id_tab_content_item).show();
    return false;
  });
});
