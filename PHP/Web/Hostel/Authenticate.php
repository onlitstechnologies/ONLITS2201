<?php
require './DBConfig.php';
require 'Utility.php';

$user_id = $_POST['user_id'];
$password = $_POST['password'];

$con = dbconfig::get_connection();

// SCENARIO 1: Without Prepared Statement

// $sql = "SELECT user_id FROM user WHERE user_id='$user_id' AND password='$password'";
// echo $sql . "<br>";
// $result = $con->query($sql);

// ---------------------------------------

// SCENARIO 2: With Prepared Statement
$stmt = $con->prepare("SELECT user_id FROM user WHERE user_id=? AND password=PASSWORD(?)");
$stmt->bind_param("ss", $user_id, $password);
$stmt->execute();
$result = $stmt->get_result();

// -----------------------------------------


if($result->num_rows>0) {
    // header("http://onlits2201.onlits.local/PHP/Web/Hostel/");
    $row = $result->fetch_assoc();
    session_start();
    $_SESSION['user_id'] = $user_id;
    utility::js_redirect("Dashboard.php");
} else {
    utility::js_alert("Invalid username or password.");
    utility::js_redirect("index.php");
    
    // header("http://onlits2201.onlits.local/PHP/Web/Hostel/", true);
}