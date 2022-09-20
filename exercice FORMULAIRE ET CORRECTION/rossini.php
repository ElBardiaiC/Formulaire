<?php
if($_POST) {
echo 'Contenu de la variable $_POST : >';
print_r($_POST);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="rossini.css">
    <title>Document</title>
</head>
<body>
    <header> <img src="img\images.jpg" alt="Le logo rossini" ></header>

    <h1>Cartes et Menu</h1>

    <div class="carte">

    <ul>

<?php 

echo "<h2>Entrée :</h2>";

$entry = [ "- Tartare de bar de ligne et homard canadien, bisque de homard tiède",
"- Marbré de foie gras de canard et anguille fumée, coings et garniture acidulée",
"- Croquette aux crevettes grises de la Mer du Nord maison","- Crème d’artichaut à la truffe fraîche"
];


$numberitem = count($entry);

    for ($i=0 ; $i < $numberitem ; $i++)
    {
    echo "<li>".$entry[$i]."</li><br>";
}


echo "<h2>Plat :</h2>";

$plat = ["- Tournedos Rossini, bœuf Black Angus, foie gras poêlé,sauce à la truffe fraîche","
- Dos de cabillaud, sauce armoricaine, croquette de homard et tombée d’épinards",
"- Noisette d’agneau fermier de Nouvelle-Zélande, parmentier et jus d’agneau, asperges vertes","-
Ravioles maison aux champignons"];

$numberitem = count($plat);

for ($i=0; $i < $numberitem ; $i++)
{
    echo "<li>" .$plat[$i]."</li><br>";
}




echo "<h2>Dessert :</h2>";


$dessert = ["- Les desserts du jour maison","
- Assortiment de fromages fermiers sélectionné en collaboration avec « La Fruitière » Bruxelles"];



// POUR Rajouter un element a la carte :


$dessert [] ="- Moeuleux au chocolat";

$numberitem = count($dessert);

for ($i=0 ; $i < $numberitem ;$i++)
{
    echo "<li>" .$dessert [$i]."</li><br>";
}






?>
 

 <div>
            
    <form method="post" action="./formulaire.php">
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




</ul>
    
    </div>

    
    <footer><h3>Telephone : +32466249372 <br>
Email : Rossini@hotmail.com</h3></footer>
</body>
</html>