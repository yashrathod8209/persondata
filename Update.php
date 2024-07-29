<?php
$Id=$_POST['Id'];
$Name =$_POST['Name'];
$Email=$_POST['Email'];
$Address =$_POST['Address'];
$PinCode=$_POST['PinCode'];
$State=$_POST['State'];
$City=$_POST['City'];
$Mobile =$_POST['Mobile'];

$Connection=new PDO("mysql:host=localhost;dbname=person","root","");
$query="UPDATE `PersonData` SET `Name`=(?),`Email`=(?),`Address`=(?),`PinCode`=(?),`State`=(?),`City`=(?),`Mobile`=(?) WHERE `Id`=(?)";
$params=[$Name,$Email,$Address,$PinCode,$State,$City,$Mobile,$Id];
$Statement=$Connection->prepare($query);
$row=$Statement->execute($params);

if($row>0)
    return header('Location:./person.php');
else
    echo "failed to update data";
    
?>