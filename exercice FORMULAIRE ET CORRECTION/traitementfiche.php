<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traitement Fiche</title>
</head>
<body>
    <h4>Received Data </h4>
    
    <?php
      
        if(isset($_POST['lastname'])  && !empty($_POST['lastname'])){
            echo "Nom reçu: ". $_POST['lastname']. "<br>";
        }else {
            echo "No lastname received!"; 
        }

        if(isset($_POST['firstname']) && !empty($_POST['firstname'])){
            echo "Prénom reçu: ". $_POST['firstname']. "<br>";
        }else {
            echo "No firstname received!"; 
        }


        if(isset($_POST['message']) && !empty($_POST['message'])){
            echo "Message: ". $_POST['message']. "<br>";
        }else {
            echo "No message received!"; 
        }


    ?>
    <p>
         <a href="./fiche.php">Retour</a>
    </p>


</body>
</html>