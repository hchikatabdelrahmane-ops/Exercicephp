<?php
echo "Traitement du formulaire<br>";
echo "Merci pour votre inscription !<br>";
echo "----------------------------------------------------------------<br>";

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    //$mot_de_passe = $_POST['mot_de_passe'];
    $sexe = $_POST['sexe'];
    $ville = $_POST['ville'];
    $loisirs = $_POST['loisirs'];
    $animaux_de_compagnie = $_POST['animaux_de_compagnie'];

    echo "Nom : " . htmlspecialchars($nom) . "<br>";
    echo "Prénom : " . htmlspecialchars($prenom) . "<br>";
    echo "Email : " . htmlspecialchars($email) . "<br>";
    echo "Mot de passe : " . htmlspecialchars($mot_de_passe) . "<br>";
    echo "Sexe : " . htmlspecialchars($sexe) . "<br>";
    echo "Ville : " . htmlspecialchars($ville) . "<br>";
    echo "Loisirs : " . htmlspecialchars($loisirs) . "<br>";
    echo "Animal de compagnie : " . htmlspecialchars($animaux_de_compagnie) . "<br>";
}
?>

