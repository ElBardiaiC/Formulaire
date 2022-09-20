<?php 
    include_once 'src/db-pseudo.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/styles.css">
    <title>Document</title>
</head>
<body>



<?php

$isFound = false; 
$connectedUser;
$loginAtt = 0 ; 
 echo "hello";

if(isset($_POST['usr'], $_POST['pwd'])){

    $loginAtt++;

    $user_name = $_POST['usr'];
    $pass_word = $_POST['pwd'];

    $sqlQuery = "
    select * 
    from pseudo
    where surmane = :param_usr AND password = :param_pwd";
    

    $statement = $mysqlClient->prepare($sqlQuery);
    $statement->execute(array(":param_usr" => $user_name, 
    ":param_pwd" => $pass_word ));
    $result = $statement -> fetchAll();

    if($result){
        $isFound= true;
        $connectedUser = $result[0]['surmane'];
        $email= $result[0]['email'];
    }

}

if($isFound){
    echo " Bienvenue sur la page d'accueil $connectedUser ($email) ";
}else {
    include_once('./views/login.php');

    if(!$isFound && $loginAtt >= 1){
        echo " Username and password incorrect!";
        $loginAtt = 0;
    }
}

?>
    
</body>
</html>