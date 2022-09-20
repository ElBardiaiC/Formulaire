<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <div>
            
    <form method="post" action="traitement-fiche.php">
        <div>
            <label for="leNom">Nom: </label>
            <input type="text" name="lastname" id="leNom">
        </div>
        <br>
        <div>
            <label for="lePrenom">Prénom:  </label>
            <input type="text" name="firstname" id="lePrenom"> 
        </div>
        <br> 
        <div>
            <label for="leMessage">Message: </label> 
            
            <br>
            <br> 
            <textarea id="leMessage" name="message" rows="5" cols="10"></textarea>
        </div>
        <input type="submit" value="Send">
        <input type="reset" value="Reset">
    </form>
</div>
    
</body>
</html>