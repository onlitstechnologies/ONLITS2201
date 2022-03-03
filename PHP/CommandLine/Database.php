<?php

function database_mysqli_procedural()
{
    require 'Credential.php';
    $con = mysqli_connect($server, $user, $password, $database);

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "mysqli_procedural: Connected successfully\n";
}

function database_mysqli_object_oriented()
{
    require 'Credential.php';
    $con = new mysqli($server, $user, $password, $database);

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    echo "mysqli_object_oriented: Connected successfully\n";
}

function database_pdo()
{
    require "Credential.php";
    try {
        $con = new PDO("mysql:host=$server; dname=$database", $user, $password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "mysqli_pdo: Connected successfully\n";
    } catch (PDOException $e) {
        echo "Connection failed: " .$e->getMessage();
    }
}

database_mysqli_procedural();
database_mysqli_object_oriented();
database_pdo();