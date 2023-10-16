<?php
require "lib/templace.php";
?>
   
<?php

$mod = !empty($_GET['mod'])?$_GET['mod']:'home';
$act = !empty($_GET['act'])?$_GET['act']:'main';

$pages = "pages/clients/{$mod}/{$act}.php";

if(file_exists($pages)){
    require $pages;
}else{
    require 'inc/404.php';
}

?>
     
       