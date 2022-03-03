<?php

function dtabase_mysqli_procedural()
{

}

function database_mysqli_object_oriented()
{
    require 'Credential.php';
    $con = new mysqli($server, $user, $password, $database);

    if($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    echo "Connected successfully\n";
}

function database_pdo()
{
    
}

database_mysqli_object_oriented();