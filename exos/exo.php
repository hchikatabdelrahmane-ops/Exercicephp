<?php 

//echo $_POST['valeur1'] + $_POST['valeur2'];

$valeur1 = $_POST['valeur1'];
$valeur2 = $_POST['valeur2'];  
$operation = $_POST['operation'];




if ($operation == 'addition') {
    $resultat = $valeur1 + $valeur2;
} 

elseif ($operation == 'soustraction') {
    $resultat = $valeur1 - $valeur2;
} 

elseif ($operation == 'multiplication') {
    $resultat = $valeur1 * $valeur2;
}

elseif ($operation == 'division') {
    $resultat = $valeur1 / $valeur2;}

echo "Le résultat de l'opération est : " . $resultat;
   