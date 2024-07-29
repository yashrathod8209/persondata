<?php

$Name =$_POST['Name'];
$Email=$_POST['Email'];
$Address =$_POST['Address'];
$PinCode=$_POST['PinCode'];
$State=$_POST['State'];
$City=$_POST['City'];
$Mobile =$_POST['Mobile'];

$Connection=new PDO("mysql:host=localhost;dbname=person","root","");
$query="INSERT INTO PersonData(`Name`,`Email`,`Address`,`PinCode`,`State`,`City`,`Mobile`)VALUE(?,?,?,?,?,?,?)";
$params=[$Name,$Email,$Address,$PinCode,$State,$City,$Mobile];
$Statement=$Connection->prepare($query);

$row = $Statement->execute($params);

if($row>0){
  return header('location:./person.php');
}else{
  echo "faild";
}





?>


