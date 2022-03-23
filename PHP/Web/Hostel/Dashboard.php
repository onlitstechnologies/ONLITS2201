<?php
require 'Utility.php';

session_start();
if(!isset($_SESSION['user_id'])) {
    utility::js_alert("Invalid session");
    utility::js_redirect("index.php");
}

$user_id = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="site.css" type="text/css">
</head>

<body>
    <div>
        <h1>Dashboard</h1>
        <h3>Good Morning! <?= $user_id?></h3>
        <p><a href="Logout.php">Logout</a></p>
    </div>
</body>

</html>