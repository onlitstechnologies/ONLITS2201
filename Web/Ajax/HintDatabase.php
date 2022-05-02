<?php
$name = $_GET['name'];
if ($name !== "") {
    $con = new mysqli("localhost", "2201", "2201", "testdb_2201");
    if ($con->connect_error) {
        die($con->connect_error);
    }

    $sql = "SELECT name from name WHERE name like '$name%'";
    $result = $con->query($sql);
    $hint = "";
    while ($row = $result->fetch_assoc()) {
        if ($hint === "") {
            $hint = $row['name'];
        } else {
            $hint .= ", " . $row['name'];
        }
    }

    echo $hint === "" ? "no sugggestion" : $hint;
}