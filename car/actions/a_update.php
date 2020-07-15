
<?php 
    require_once 'db_connect.php';

    if ($_POST) {
    $brand = $_POST['brand'];
    $modell = $_POST['modell'];
    $body_type = $_POST[ 'body_type'];

    $id = $_POST['id'];

    $sql = "UPDATE car SET brand = '$brand', modell = '$modell', body_type = '$body_type' WHERE car_id = {$id}" ;
    if($connect->query($sql) === TRUE) {
        echo  "<p>Successfully Updated</p>";
        echo "<a href='../update.php?id=" .$id."'><button type='button'>Back</button></a>";
        echo  "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
            echo "Error while updating record : ". $connect->error;
    }

    $connect->close();

    }

?>