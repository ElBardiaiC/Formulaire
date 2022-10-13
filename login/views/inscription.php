<?php 

// $servername = "localhost";
// $username = "pseudo";
// $password = "mdp";
// try {
//     $conn = new PDO("mysql:host=$servername;dbname=espace_membre", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully";
//   } catch(PDOException $e) {
//     echo "Connection failed: " . $e->getMessage();
//   }
session_start();




$bdd = new PDO('mysql:host=localhost;dbname=espace_membre;charset=utf8;','root','root');
if(isset($_POST['envoi'])){
    if(!empty($_POST['pseudo']) and !empty($_POST['mdp'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = sha1($_POST['mdp']);
        $insertUser = $bdd->prepare('INSERT INTO "users" ("pseudo", "mdp")VALUES(?,?)');
        $insertUser->execute(array($pseudo,$mdp));

        $recupUser = $bdd->prepare('SELECT* FROM users WHERE pseudo = ? AND mdp= ?');
        $recupUser->execute(array($pseudo,$mdp));
        if(
            $recupUser->rowCount()>0){

        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['mdp'] = $mdp;
        $_SESSION['id'] = $recupUser->fetch()['id']; 
           echo $_SESSION['id'];
    
    }
 
    
    }else{
        echo 'veuillez compléter tout les champs';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/style.css">
    <title>Document</title>
</head>
<body>
    
<form method="POST" action="#" >

<input type="text" name="pseudo" autocomplete="off">
<br>
<input type="password" name="mdp" autocomplete="off">
<br>
<br>
<input type="submit" name="envoi">

</form>

</body>
</html>