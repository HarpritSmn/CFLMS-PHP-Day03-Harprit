<?php require_once 'actions/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
<title>Car rental</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!-- <style type ="text/css">
    .manageUser {
        width : 50%;
        margin: auto;
    }

    table {
        width: 100%;
        margin-top: 20px;
    }
</style> -->
</head>
<body>

<div class ="manageUser">
   <a href= "create.php"><button type="button" >Add car</button></a>
   <table class="table table-hover">
       <thead>
           <tr>
               <th scope="col">brand</th>
               <th scope="col">modell</th>
               <th scope="col">body type</th>
           </tr>
       </thead>
       <tbody>
       <?php
           $sql = "SELECT * FROM car";
           $result = $connect->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo "<tr>
                            <td>".$row['brand']."</td>
                            <td>".$row['modell']."</td>
                            <td>".$row['body_type']."</td>
                            <td>
                            <a href='update.php?id=" .$row['car_id']."'><button type='button'>Edit</button></a>
                            <a href='delete.php?id=" .$row['car_id']."'><button type='button'>Delete</button></a>
                            </td>
                        </tr>";
                }
            } else {
                echo"<tr>
                        <td colspan='5'><center>No Data Avaliable</center></td>
                    </tr>";
            }
        ?>
       </tbody>
   </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>