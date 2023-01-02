<?php

$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "student3699partB";

$con = mysqli_connect($sname, $uname, $password, $db_name);

if (!$con) {
    echo "Connection failed!";
}

?>