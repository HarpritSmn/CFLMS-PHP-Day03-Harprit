<?php 
require_once 'actions/db_connect.php';

if ($_GET['id']) {
   $id = $_GET['id'];

   $sql = "SELECT * FROM car WHERE car_id = {$id}" ;
   $result = $connect->query($sql);
   $data = $result->fetch_assoc();

   $connect->close();
?>

<!DOCTYPE html>
<html>
<head>
   <title >Delete car</title>
</head>
<body>

<h3>Do you really want to delete this car?</h3>
<form action ="actions/a_delete.php" method="post">
   <input type="hidden" name= "car_id" value="<?php echo $data['car_id'] ?>" />
   <button type="submit">Yes, delete it!</button>
   <a href="index.php"><button type="button">No, go back!</button ></a>
</form>

</body>
</html>

<?php
}
?>