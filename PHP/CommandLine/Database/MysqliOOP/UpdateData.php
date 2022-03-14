<?php
require "Credential.php";
$con = new mysqli($server, $user, $password, "testdb_2201");

if ($con->connect_error) {
    echo $con->connect_error . "\n";
    exit(0);
}
$employee_id = readline("Enter Employee Id: ");
$sql = "SELECT * FROM employee WHERE employee_id='$employee_id'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Name: " . $row['name'] . "\n";
    echo "Contact Number: " . $row['contact_no'] . "\n\n";
    $name = readline("Enter name: ");
    $contact_no = readline("Enter contact number: ");

    if (!empty($name)) {
        $sql = "UPDATE employee SET name='$name' WHERE employee_id='$employee_id'";
        $con->query($sql);
    }

    if (!empty($contact_no)) {
        $sql = "UPDATE employee SET contact_no='$contact_no' WHERE employee_id='$employee_id'";
        $con->query($sql);
    }

    echo "Data updated\n";
} else {
    echo "No records found\n";
}

$con->close();