<?php
$room_no = '101';
$con = dbconfig::get_connection();
$sql = "SELECT * FROM room_allocation WHERE room_no='$room_no' ORDER BY allocation_id DESC LIMIT 1";
$result = $con->query($sql);
if($result->num_rows>0) {
    $row = $result->fetch_all();
}