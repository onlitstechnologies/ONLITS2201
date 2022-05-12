<?php
require_once './DBConfig.php';
$hosteller_id = $_GET['id'];
$con = dbconfig::get_connection();
$sql = "SELECT first_name, middle_name, last_name FROM hosteller WHERE hosteller_id='$hosteller_id'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($row['middle_name'] != '') {
        echo $row['first_name'] . " " . $row['middle_name'] . " " . $row['last_name'];
    } else {
        echo $row['first_name'] . " " . $row['last_name'];
    }
} else {
    echo "Name not found";
}