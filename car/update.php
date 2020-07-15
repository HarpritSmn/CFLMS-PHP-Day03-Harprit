<?php
    require_once 'actions/db_connect.php';

    if ($_GET['id']) {
        $id = $_GET['id'];

        $sql = "SELECT * FROM car WHERE car_id = {$id}";
        $result = $connect->query($sql);
        $data = $result->fetch_assoc();
        $connect->close();
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit cars</title>
    <style type= "text/css">
        fieldset {
            margin : auto;
            margin-top: 100px;
            width: 50%;
        }

        table  tr th {
            padding-top: 20px;
        }
    </style>
</head>
<body>
<fieldset>
   <legend>Update car</legend>

    <form action="actions/a_update.php" method="post">
        <table  cellspacing="0" cellpadding= "0">
            <tr>
                <th>brand</th>
                <td><input type="text" name="brand" placeholder ="brand" value="<?php echo $data['brand'] ?>"  /></td>
            </tr>    
           <tr>
               <th>modell</th>
               <td><input type= "text" name="modell"  placeholder="modell" value ="<?php echo $data['modell'] ?>" /></td >
           </tr>
           <tr>
               <th>body type</th>
               <td><input type ="text" name= "body_type" placeholder= "Bode Type" value= "<?php echo $data['body_type'] ?>" /></td>
           </tr>
           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data['car_id']?>" />
               <td><button type= "submit">Save Changes</button></td>
               <td><a href="index.php"><button type="button">Back</button></a></td>
           </tr>
       </table>
   </form>

</fieldset>

</body>
</html>

<?php
    }
?>