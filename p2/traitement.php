<?php 
$dico = [
    "chat" => "cat",
    "chien" => "dog",
    "maison" => "house",
    "voiture" => "car",
    "arbre" => "tree",
    "soleil" => "sun",
    "lune" => "moon",
    "mer" => "sea",
    "montagne" => "mountain",
    "ordinateur" => "computer",
    "telephone" => "phone",
    "table" => "table",
    "chaise" => "chair",
    "porte" => "door",
    "fenetre" => "window",
    "livre" => "book",
    "stylo" => "pen",
    "ville" => "city",
    "pays" => "country",
    "ecole" => "school",
    "ami" => "friend",
    "famille" => "family",
    "professeur" => "teacher",
    "eleve" => "student",
    "travail" => "work",
    "argent" => "money",
    "eau" => "water",
    "feu" => "fire",
    "terre" => "earth",
    "vent" => "wind",
    "rouge" => "red",
    "bleu" => "blue",
    "vert" => "green",
    "noir" => "black",
    "blanc" => "white",
    "beau" => "beautiful",
    "rapide" => "fast",
    "lent" => "slow",
    "fort" => "strong",
    "faible" => "weak",
    "grand" => "tall",
    "petit" => "small",
    "froid" => "cold",
    "chaud" => "hot",
    "manger" => "eat",
    "boire" => "drink",
    "marcher" => "walk",
    "parler" => "talk",
    "dormir" => "sleep"
];




if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Accès interdit.");
}


$mot = htmlspecialchars($_POST['word'] ?? '');
$langue = htmlspecialchars($_POST['langue'] ?? '');

if (empty($mot) || empty($langue)) {
    die("Veuillez fournir un mot et une langue.");
}

if ($langue === 'anglais') {
    if (array_key_exists($mot, $dico)) {
        echo "Le mot '$mot' en anglais est : " . $dico[$mot];
    } else {
        echo "Le mot '$mot' n'est pas dans le dictionnaire.";
    }
} elseif ($langue === 'francais') {
    $mot_trouve = array_search($mot, $dico);
    if ($mot_trouve !== false) {
        echo "Le mot '$mot' en français est : " . $mot_trouve;
    } else {
        echo "Le mot '$mot' n'est pas dans le dictionnaire.";
    }
} else {
    echo "Langue non prise en charge.";
}

?>

