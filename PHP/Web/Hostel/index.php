<?php
    require "Utility.php";
    session_start();
    if(isset($_SESSION['user_id'])) {
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
    <link rel="stylesheet" href="site.css" type="text/css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <style>
        h1 {color: blue;}
    </style>
    
</head>

<body>
    <div>
        <h1 style="color: green">HMS 1.0</h1>
        <h1>Login</h1>
        <form action="Authenticate.php" method="POST">
            <input type="text" name="user_id" id="user_id" placeholder="User Id">
            <input type="password" name="password" id="password" placeholder="Password">
            <button>Login</button>
            <label name="error_message" id="error_message"></label>
        </form>
    </div>
</body>

</html>