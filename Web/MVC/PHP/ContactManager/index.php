<?php
require_once "./.config/bootstrap.php";

use contact_manager\home_controller;

$uri = $_SERVER['REQUEST_URI'];         //Reading URI's
$prefix = "/Web/MVC/PHP/ContactManager";
switch($uri)
{
    case "$prefix/":        //Route 1
        $home = new home_controller();
        $home->index();
        break;
    case "$prefix/about-us":     //Route 2
        require_once "./View/AboutUs.php";
        break;
    case "$prefix/new-contact":     //Route 3
        echo "Under Construction ...";
        break;
    default:
        require "./View/404.php";
}
?>