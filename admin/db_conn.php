<?php
$sname = "sql107.epizy.com";
$uname = "epiz_34130351";
$password = "x01u0Otwj6";

$db_name = "epiz_34130351_dyoevents_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if(!$conn){
    echo "Connection failed!";
    exit();
}