<?php
require_once "./DBConfig.php";
require_once "./HostellerModel.php";
$room_no = $_GET['room_no'];
$con = dbconfig::get_connection();
$sql = "SELECT * FROM room_allocation WHERE room_no='$room_no'";
$result = $con->query($sql);
if($result->num_rows>0) {
    $row = $result->fetch_assoc();
}
$allocation['allocation_id'] = $row['allocation_id'];
$allocation['hosteller_id'] = $row['hosteller_id'];
$hosteller = new hosteller_model();
$allocation['hosteller_name'] = $hosteller->display_name($row['hosteller_id']);
echo json_encode($allocation);