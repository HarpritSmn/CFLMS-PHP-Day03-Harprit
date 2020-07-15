<?php
    $localhost = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "car_rental";

$connect = new mysqli($localhost, $username, $password, $dbname);

if ($connect->connect_error) {
    die("connection failed:" .$connect->_error);
}else{
    //echo "success";
}

?>