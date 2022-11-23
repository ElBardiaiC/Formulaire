<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<!-- ----------------------------------------------------------------------------------- -->
<div>
    <form method="post" action="./operation.php">

<div>
    <h1>Additions</h1>
    <label for="number1">Addition1 : 
    <input type="number" name="number1" >
    </label>
</div>
<br>

<div>
    <label for="number2">Addition2 : 
    <input type="number" name="number2"  >
    </label>
</div>
<br>

<input type="submit" name="submit" value="+">


<?php

if(isset($_POST ['submit'])){



    $number1= $_POST['number1'];
    $number2= $_POST['number2'];
    $sum = $number1+$number2;
    
    
    
    echo "La Sommes entre $number1 et $number2 = ".$sum; 
    
    
    
    }
?>


<!-- ------------------------------------------------------------------------------------ -->


<div>
    <h1>Division</h1>
    <label for="div1">Chiffre 1</label>
    <input type="number" name="div1">
</div>
<br>
<div>
    <label for="div2">Chiffre 2</label>
    <input type="number" name="div2">
</div>
<br>
<input type="submit" name="submit1" value="/">

<?php


if(isset($_POST['submit1'])){
    $division1 = $_POST['div1'];
    $division2 = $_POST['div2'];
    $sumDiv = $division1 / $division2;

    echo "la division entre $division1 et $division2 = ".$sumDiv;
}
?>

<!-- -------------------------------------------------------------------------------------- -->

<div>
    <h1>multiplication</h1>
    <label for="mult1">Chiffre 1</label>
    <input type="number" name="mult1">
</div>
<br>
<div>
    <label for="mult2">Chiffre 2</label>
    <input type="number" name="mult2">
</div>
<br>
<input type="submit" name="submit3" value="*">

<?php

if(isset($_POST['submit3'])){
    $multiplication1 = $_POST['mult1'];
    $multiplication2 = $_POST['mult2'];
    $sumMult = $multiplication1 * $multiplication2;

    echo "lla multiplication entre $multiplication1 et $multiplication2 = ".$sumMult;
}
?>

<!-- --------------------------------------------------------------------------------------- -->

<div>
    <h1>soustraction</h1>
    <label for="sous1">Chiffre 1</label>
    <input type="number" name="sous1">
</div>
<br>
<div>
    <label for="sous2">Chiffre 2</label>
    <input type="number" name="sous2">
</div>
<br>
<input type="submit" name="submit2" value="-">

<?php
if(isset($_POST['submit2'])){
    $soustraction1 = $_POST['sous1'];
    $soustraction2 = $_POST['sous2'];
    $sumSous = $soustraction1 - $soustraction2;

    echo "lla soustraction entre $soustraction1 et $soustraction2 = ".$sumSous;
}

?>

<!-- --------------------------------------------------------------------------------------- -->

<div>
    <h1>Calculatrice</h1>
    <label for="calc1">Chiffre 1</label>
    <input type="number" name="calc1">
</div>
<br>
<div>
    <label for="calc2">Chiffre 2</label>
    <input type="number" name="calc2">
</div>
<br>
<!--  stap any pour lma virgule dans les input -->
<input type="submit" name="subPlus" value="+" step="any">
<input type="submit" name="subDiv" value="/" step="any">
<input type="submit" name="subMoin" value="-" step="any">
<input type="submit" name="subFoix" value="*" step="any">

<?php

if(isset($_POST['subPlus']))
 {
    
    $numb1 = $_POST['calc1'];
    $numb2 = $_POST['calc2'];
    $sumCal = $numb1 + $numb2;

    echo "la somme entre $numb1 et $numb2 = ".$sumCal;




}elseif(isset($_POST['subDiv'])){

    $numb1 = $_POST['calc1'];
    $numb2 = $_POST['calc2'];
    $sumCal = $numb1 / $numb2;

    echo "la division entre $numb1 et $numb2 = ".$sumCal;






}elseif(isset($_POST['subMoin'])){

    
    $numb1 = $_POST['calc1'];
    $numb2 = $_POST['calc2'];
    $sumCal = $numb1 - $numb2;

    echo "la soustraction entre $numb1 et $numb2 = ".$sumCal;




    

}elseif(isset($_POST['subFoix'])){

    
    $numb1 = $_POST['calc1'];
    $numb2 = $_POST['calc2'];
    $sumCal = $numb1 * $numb2;

    echo "la multiplication entre $numb1 et $numb2 = ".$sumCal;

}
?>

<!-- -------------------------------------------------------------------------------------------- -->


<div>
    <h1>Mineur ou Majeur</h1>
    <label for="age">Age</label>
    <input type="number" name="age">

    <input type="submit" name="ok" value="envoyer">

    <?php

if(isset($_POST['ok'])){
  
    $age1 = $_POST['age'];

    if($age1 >=0 && $age1  <= 17){
        echo "  vous etes mineur ";
    }
    elseif($age1 >=18){
        echo " vous etes majeur";
    }
    else {
        echo" entré invalide"; 
    }
    
}

?>

    
</div>
    </form>
</div>


</body>
</html>
