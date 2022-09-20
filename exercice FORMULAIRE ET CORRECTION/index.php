<?php
include_once './db-facebook.php'
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
    

<?php

$isfound= false;



if(isset($_POST['username'], $_POST['password'])){

    $user_name = $_POST['username'];
    $pass_word = $_POST['password'];

$sqlQuery= "SELECT *
FROM membres
WHERE username=:param_username  AND  password= :param_password
"; 

$statement = $mysqlClient->prepare($sqlQuery);
$statement->execute(array("param_username" => $user_name, "param_password" =>$pass_word));
$result = $statement -> fetchAll();



if($result){
$isfound = true;
$connectedUser =$result[0]['username'];
}

}




if($isfound){

    echo' bienvenu'. $user_name;
    }
    else{
        include_once ('./login.php');

}


?>





</body>
</html>