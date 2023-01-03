<?php

$sname = "webpagesdb.it.auth.gr:3306";
$uname = "andreasn";
$password = "29122001a";
$db_name = "student3699partB";

$con = mysqli_connect($sname, $uname, $password, $db_name);

if (!$con) {
    echo "Connection failed!";
}

?>