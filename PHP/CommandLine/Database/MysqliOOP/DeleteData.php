<?php
require "Credential.php";
$con = new mysqli($server, $user, $password, "testdb_2201");
$employee_id = readline("Enter Employee Id: ");
$sql = "SELECT name FROM employee  WHERE employee_id=$employee_id";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_array();
    $name = $row[0];
    echo "Name: $name" . "\n";
    $status = readline("Do you really want to delete the record (y/n): ");
    if ($status == "y") {
        $status = readline("Are you sure! (y/n)");
        if ($status == "y") {
            $sql = "DELETE FROM employee WHERE employee_id=$employee_id";
            if ($con->query($sql) === true) {
                echo "Data deleted.\n";
            } else {
                $con->error . "\n";
            }
        } else {
            echo "Aborted.\n";
        }
    } else {
        echo "Aborted.\n";
    }
} else {
    echo "No records found.\n";
}