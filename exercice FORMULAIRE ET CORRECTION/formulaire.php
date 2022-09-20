<!-- Objectifs: 
- introduire un simple formulaire HTML dans un site
- définir le fichier/script PHP qui traitera les données du formulaire
- Récupérer les données soumises à travers la variable globale tableau $_POST 

En partant du site réalisé dans l'exercice 1 (1-site-web-restaurant), 

Ajoutez un formulaire de contact. 

Votre formulaire de contact devra contenir:
- le nom et prénom de la personne qui vous contacte
- son adresse email 
- son numéro de téléphone 
- le contenu du message


Vous afficherez ensuite le résumé des données reçues après soumission du formulaire. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./rossini.css">
    <title>Document</title>
</head>
<body>
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
    <a href="./rossini.php">Retour</a>
    </p>


    
</body>
</html>
