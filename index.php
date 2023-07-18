<?php
include 'website/views/Mobile_Detect.php';
$detect = new Mobile_Detect();

$gets = explode("/",str_replace(strrchr($_SERVER["REQUEST_URI"], "?"), "", $_SERVER["REQUEST_URI"]));
array_shift($gets);

if(file_exists('website/views/'.end($gets).".php")){
    include_once('website/views/'.end($gets).".php");
} else if(file_exists('website/views/'.end($gets).".html")){
    include_once('website/views/'.end($gets).".html");
} else {
    include_once("website/views/home.php");
}
