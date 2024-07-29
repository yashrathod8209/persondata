<?php

$Id=$_GET['Id'];
$Connection=new PDO("mysql:host=localhost;dbname=person","root","");

$query="SELECT * FROM `PersonData`WHERE `Id`=(?)";
$params=[$Id];
$Statement=$Connection->prepare($query);
$row = $Statement->execute($params);
$Person= $Statement->fetch(PDO::FETCH_ASSOC);
// print_r($Person);
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./Update.php" method="post">
        <input type="hidden" name="Id" value="<?=$Person["Id"]?>"/>
        <input type="text" name="Name" value="<?=$Person["Name"]?>"/>
        <input type="text" name="Email" value="<?=$Person["Email"]?>"/>
        <input type="text" name="Address" value="<?=$Person["Address"]?>"/>
        <input type="text" name="PinCode" value="<?=$Person["PinCode"]?>"/>
        <input type="text" name="State" value="<?=$Person["State"]?>"/>
        <input type="text" name="City" value="<?=$Person["City"]?>"/>
        <input type="text" name="Mobile" value="<?=$Person["Mobile"]?>"/>
        <input type="submit" value="submit">
    </form>
    
</body>
</html>