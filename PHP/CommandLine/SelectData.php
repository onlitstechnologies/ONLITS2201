<?php
require 'Credential.php';
$con = new mysqli($server, $user, $password, "testdb_2201");
$sql = "SELECT * FROM employee";
$result = $con->query($sql);
if($result->num_rows>0) {
    $row = $result->fetch_assoc();
    echo $row["name"] . "\n";
}