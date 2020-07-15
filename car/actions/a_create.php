<?php
    require_once 'db_connect.php';

    if($_POST){
        $brand = $_POST['brand'];
        $modell = $_POST['modell'];
        $body_type = $_POST['body_type'];

        $sql = "INSERT INTO `car`(`brand`, `modell`, `body_type`) VALUES ('$brand', '$modell', '$body_type')";

        if($connect->query($sql) === TRUE){
            echo "<p>new record succesfully created</p>";
            echo "<a href='../create.php'><button type='button'>Back</button></a>";
            echo "<a href='../index.php'><button type='button'>Home</button></a>";
        }else{
            echo "Error " . $sql . ' ' . $connect->connect_error;
        }

        $connect->close();
    }
?>