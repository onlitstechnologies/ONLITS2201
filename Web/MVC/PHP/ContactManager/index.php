<?php

use contact_manager\home_controller;

$uri = $_SERVER['REQUEST_URI'];
$prefix = "/Web/MVC/PHP/ContactManager";
switch($uri)
{
    case "$prefix/":
        $home = new home_controller();
        $home->index();
        break;
    case "$prefix/aboutus":
        require "./View/AboutUs.php";
        break;
    default:
        require "./View/404.php";
}