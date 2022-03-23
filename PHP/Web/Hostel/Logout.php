<?php
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="site.css">
    <title>Document</title>
</head>
<body>
    <p class="type1" id="logout">You have been successfully logged out. <a href="index.php">Click here</a> to login here.</p>
    <p class="type2">This is another paragraph</p>
</body>
</html>