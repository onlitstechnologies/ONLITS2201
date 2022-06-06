<?php
$uri = $_SERVER['REQUEST_URI'];
echo $uri;
$prefix = "/Web/MVC/PHP/ContactManager";
switch($uri)
{
    case "$prefix/":
        require "./View/Home.php";
        break;
    case "$prefix/aboutus":
        require "./View/AboutUs.php";
        break;
    default:
        require "./View/404.php";
}