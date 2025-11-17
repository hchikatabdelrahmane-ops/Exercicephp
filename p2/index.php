<?php
$prenom = "Jean";
$age = 30;

echo "Bonjour, je m'appelle $prenom et j'ai $age ans.";

$bool=true;
$prix=19.99;

echo $prix + 2 ;

echo $prenom . ' est a IPSSI.' ;

?>

<?php


$prenom = ["Jean", "Marie", "Paul"];

$prenom[1] = "Sophie";

//echo $prenom[1];

$etudiants = [

'prenom' => "Luc",
'age' => 22,
'ville' => "Paris"


];

//echo $etudiants['prenom'];


var_dump($_POST);   //afficher la structure complete du tableau


<?php


$indice = 3;
$indice = 0;

$titre =[15 , 12 , 8 , 5 , 2 , 17];

var_dump($titre);

echo "<br>Valeur 1 = " . $titre[0];
echo "<br>Valeur 2 = " . $titre[1];












echo "Le titre sélectionné est : " . $titre [3];


?>