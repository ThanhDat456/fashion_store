<?php


function get_header()
{
    $path_header = "inc/header.php";
    if (file_exists($path_header)) {
        require $path_header;
    } else {
        require "inc/404.php";
    }
}

function get_footer()
{
    $path_footer = "inc/footer.php";
    if (file_exists($path_footer)) {
        require $path_footer;
    } else {
        require "inc/404.php";
    }
}

function get_header_admin()
{
    $path_header_admin = "inc/header-admin.php";
    if (file_exists($path_header_admin)) {
        require $path_header_admin;
    } else {
        require "inc/404.php";
    }
}

function get_footer_admin()
{
    $path_footer_admin = "inc/footer-admin.php";
    if (file_exists($path_footer_admin)) {
        require $path_footer_admin;
    } else {
        require "inc/404.php";
    }
}

function get_sidebar_admin(){
    $path_sidebar_admin = "inc/sidebar-admin.php";
    if(file_exists($path_sidebar_admin)){
        require $path_sidebar_admin;
    }else{
        require "inc/404.php";
    }
}
function get_header_login(){
    $path_header_login = "inc/header-login.php";
    if(file_exists($path_header_login)){
        require $path_header_login;
    }else{
        require "inc/404.php";
    }
}