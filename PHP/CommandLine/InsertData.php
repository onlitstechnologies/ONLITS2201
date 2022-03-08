<?php
require 'Credential.php';
$name = readline("Enter name: ");
$contact_no = readline("Enter contact number: ");

$con = new mysqli($server, $user, $password, "testdb_2201");

if ($con->connect_error) {
    echo $con->connect_error . "\n";
    exit(0);
}

$sql = "INSERT INTO employee(name, contact_no) VALUES('$name', '$contact_no')";
$status = $con->query($sql);

if($status==TRUE) {
    echo "Data inserted successfully\n";
} else {
    echo $con->error . "\n";
}
$con->close();