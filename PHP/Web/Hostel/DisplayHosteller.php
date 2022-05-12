<?php
require_once './DBConfig.php';
$hosteller_id = $_GET['id'];
$con = dbconfig::get_connection();
$sql = "SELECT * FROM hosteller WHERE hosteller_id='$hosteller_id'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode($row);
} else {
    echo "Record not found";
}