<?php

$Connection=mysqli_connect('localhost','root','','Person');

$query="SELECT * FROM `PersonData`";
$result=mysqli_query($Connection,$query);
$Persons=mysqli_fetch_all($result,MYSQLI_ASSOC);
// print_r($Persons);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In page</title>
    <style>
        body{
            display: flex;
            align-items: center;
        
        }
    form{
        padding-right: 50px;
    }
    table{
        color: red;
    }
    </style>
</head>
<body>
    <form action="./Take.php" method="post">
        <input type="text" name="Name" placeholder="NAME" autofocus/><br>
        <input type="text" name="Email" placeholder="EMAIL"/><br>
        <input type="text" name="Address" placeholder="ADDRESS" /><br>
        <input type="text" name="PinCode" placeholder="PINCODE" /><br>
        <input type="text" name="State" placeholder="STATE" /><br>
        <input type="text" name="City" placeholder="CITY" /><br>
        <input type="text" name="Mobile" placeholder="MOBILE"/><br>
        <input type="submit" value="submit"/>

    </form>
    <table border="1">
        <thead>
            <th>Name</th>
            <th>email</th>
            <th>address</th>
            <th>pincode</th>
            <th>state</th>
            <th>city</th>
            <th>mobile</th>
            <th>delete</th>
            <th>Update</th>
        </thead>
        <tbody>
            <?php foreach ($Persons as $Person) {?>
                <tr>
                    <td><?php echo $Person["Name"]?></td>
                    <td><?php echo $Person["Email"]?></td>
                    <td><?php echo $Person["Address"]?></td>
                    <td><?php echo $Person["PinCode"]?></td>
                    <td><?php echo $Person["State"]?></td>
                    <td><?php echo $Person["City"]?></td>
                    <td><?php echo $Person["Mobile"]?></td>
                    <td><a href="./Delete.php?Id=<?=$Person['Id']?>">Delete</a></td>
                    <td><a href="./Updatepage.php?Id=<?=$Person['Id'] ?>">Update</a></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</body>
</html>