<?php
require 'Credential.php';

$con = new mysqli($server, $user, $password);

if ($con->connect_error) {
    die($con->connect_error);
}

$sql = "CREATE DATABASE testdb_2201";
if ($con->query($sql) === TRUE) {
    echo "Database created\n";
} else {
    echo $con->error . "\n";
}

$con->close();