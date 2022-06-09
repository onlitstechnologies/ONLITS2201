<?php
require_once "./.config/bootstrap.php";

use contact_manager\home_controller;

$home = new home_controller();
$home->index();
echo "\n";