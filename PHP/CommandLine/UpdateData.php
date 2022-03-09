<?php
require "Credential.php";
$con = new mysqli($server, $user, $password, "testdb_2201");

if($con->connect_error) {
    echo $con->connect_error . "\n";
    exit(0);
}
$employee_id = readline("Enter Employee Id: ");
$sql = "SELECT * FROM employee WHERE employee_id='$employee_id'";
$result = $con->query($sql);
if($result->num_rows>0) {
    $row = $result->fetch_assoc();
    echo $row['name'] . "\n";
} else {
    echo "No records found\n";
}