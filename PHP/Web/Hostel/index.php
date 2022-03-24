<?php
require "Utility.php";
session_start();
if (isset($_SESSION['user_id'])) {
    utility::js_redirect("Dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMS - Identify Yourself</title>
    <link rel="stylesheet" href="site.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <style>
        .container {
            width: 400px;
            height: 400px;
            background-color: #EEEEEE;
            border: 1px solid #3366FF;
            padding-top: 100px;
            margin: 0 auto; /*To center an object*/
            margin-top: 50px;
            
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="Authenticate.php" method="POST">
            <div class="logo-type-1">
                <img src="images\Logo.jpg" alt="Logo" width="100">
            </div>
            <input type="text" name="user_id" id="user_id" placeholder="User Id" class="form-control-block">
            <input type="password" name="password" id="password" placeholder="Password" class="form-control-block">
            <button class="form-control-block submit">Login</button>
            <label name="error_message" id="error_message"></label>
        </form>
    </div>
</body>

</html>