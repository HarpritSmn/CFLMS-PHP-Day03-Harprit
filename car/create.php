<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add car</title>
    <style type= "text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50% ;
        }
        table tr th  {
            padding-top: 20px;
        }
    </style>
</head>
<body>
<fieldset>
   <legend>Add car</legend>

   <form action="actions/a_create.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
           <tr>
                <th>brand</th>
                <td><br><input type="text" name="brand" placeholder="brand"/></td >
           </tr>    
           <tr>
                <th>modell</th>
                <td><br><input type="text" name= "modell" placeholder="modell"/></td>
           </tr>
           <tr>
                <th>body type</th>
                <td><br><input type="text" name="body_type" placeholder="body type"/></td>
           </tr>
           <tr>
                <td><br><button type ="submit">Insert car</button></td>
                <td><br><a href="index.php"><button type="button">Back</button></a></td>
           </tr>
       </table>
   </form>

</fieldset>
</body>
</html>