<?php
require 'Credential.php';
$con = new mysqli($server, $user, $password, "testdb_2201");
$sql = "SELECT * FROM employee";
$result = $con->query($sql);
print_dash(49, true);
$formatted = sprintf("%-15s%-20s%s\n","Employee Id", "Name", "Contact Number");
echo $formatted;
print_dash(49, true);
while($row=$result->fetch_assoc()) {
    $employee_id = $row['employee_id'];
    $name = $row['name'];
    $contact_no = $row['contact_no'];
    if($contact_no==NULL)
        $contact_no = "NA";
   $formatted = sprintf("%-15s%-20s%s\n",$employee_id, $name, $contact_no);
   echo $formatted;
}
print_dash(49, true);

function print_dash($times, $nl)
{
    for($i=1; $i<=$times; $i++)
        echo "-";
    if($nl==true)
        echo "\n";
}