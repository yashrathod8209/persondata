<?php

$Id=$_GET['Id'];
$Connection=new PDO("mysql:host=localhost;dbname=person","root","");
$query="DELETE FROM PersonData WHERE `Id`=(?)";
$params=[$Id];
$Statement=$Connection->prepare($query);

$row = $Statement->execute($params);



if($row > 0){
    return header('Location:./person.php');
}else{
    echo "failed to delete";
}

?>