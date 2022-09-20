

<?php

if(isset($_POST ['submit'])){

$number1= $_POST['number1'];
$number2= $_POST['number2'];
$sum = $number1+$number2;



echo "La Sommes entre $number1 et $number2 = ".$sum; 



}

if(isset($_POST['submit1'])){
    $division1 = $_POST['div1'];
    $division2 = $_POST['div2'];
    $sumDiv = $division1 / $division2;

    echo "la division entre $division1 et $division2 = ".$sumDiv;
}

if(isset($_POST['submit3'])){
    $multiplication1 = $_POST['mult1'];
    $multiplication2 = $_POST['mult2'];
    $sumMult = $multiplication1 * $multiplication2;

    echo "lla soustraction entre $multiplication1 et $multiplication2 = ".$sumMult;
}

if(isset($_POST['submit2'])){
    $soustraction1 = $_POST['sous1'];
    $soustraction2 = $_POST['sous2'];
    $sumSous = $soustraction1 - $soustraction2;

    echo "lla soustraction entre $soustraction1 et $soustraction2 = ".$sumSous;
}

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

