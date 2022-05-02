<?php
// $names = array("Aman", "Raju", "Mrityunjay");

$str = $_GET['name'];

$name[] = "Akash";
$name[] = "Ravi";
$name[] = "Mala";
$name[] = "Varun";
$name[] = "Mrityunjay";
$name[] = "Rakesh";
$name[] = "Abhishek";
$name[] = "Mohan";
$name[] = "Rishi";
$name[] = "Vaibhav";
$name[] = "Aparna";
$name[] = "Suman";
$name[] = "Shikha";
$name[] = "Saloni";
$name[] = "Vibhu";
$name[] = "Anil";
$name[] = "Sunil";
$name[] = "Priya";
$name[] = "Paresh";
$name[] = "Samridhi";

$hint = "";

if($str !== "") {
    $str = strtolower($str);
    $len = strlen($str);
    foreach($name as $n) {
        if(stristr($str, substr($n,0,$len))) {
            if($hint === "") {
                $hint = $n;
            } else {
                $hint .= ", $n";
            }
        }
    }
}

echo $hint === "" ? "no sugggestion" : $hint;