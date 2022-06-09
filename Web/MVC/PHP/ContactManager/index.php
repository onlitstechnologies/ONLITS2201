<?php

use contact_manager\home_controller;

$uri = $_SERVER['REQUEST_URI'];         //Reading URI's
echo $uri . "<br>";
$prefix = "/Web/MVC/PHP/ContactManager";
switch($uri)
{
    case "$prefix/":
        // $home = new home_controller();
        // $home->index();
        break;
    case "$prefix/aboutus":
        require "./View/AboutUs.php";
        break;
    case "$prefix/new-contact":
        echo "Under Construction ...";
        break;
    default:
        require "./View/404.php";
}
?>
<h1>Index</h1>