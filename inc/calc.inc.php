<?php

include_once "bootstrap.inc.php";

// var_dump($_GET);

if (isset($_GET["num1"]) && isset($_GET["num2"]) && isset($_GET["oper"])) {
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $oper = $_GET["oper"];
    
    $calculator = new Calculator(intval($num1), intval($num2), $oper );
    $calculator->calculate();

} else {
    echo "error";
}


