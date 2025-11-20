<?php


try {
    $dbh = new PDO('mysql:host=localhost;dbname=jo;charset=utf8', 'root', '');
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}






?>


<h1>Inscription</h1>

<form method="post" action="./">
    <label>Username : </label>
    <input type="text" name="username"><br/>

    <label>Password : </label>
    <input type="password" name="password"><br/>

    <input type="submit" value="Valider" name="register">
</form>



<h1>Connection</h1>

<form method="post" action="./">
    <label>Username : </label>
    <input type="text" name="username"><br/>

    <label>Password : </label>
    <input type="password" name="password"><br/>

    <input type="submit" value="Valider" name="register">
</form>

<?php
if (isset($_POST['register'])) {
    if ($_POST['username'] != '' && $_POST['password'] != '') {
        $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $sth = $dbh->prepare('INSERT INTO `user` (`username`, `password`) VALUES (:username, :password)');
        $sth->execute([
            'username' => $_POST['username'],
            'password' => $hash,
        ]);
        echo "<b>Votre inscription est valide</b>";
    }
}

if (isset($_POST['connect'])) {
    $stmt = $dbh->prepare( query: "SELECT * FROM user WHERE username = :username");
    $stmt->execute(['username' => $_POST['username']]);
    $user = $stmt->fetch( mode: PDO::FETCH_ASSOC);
 
    if ($user) {
        if (password_verify($_POST['password'], $user['password'])) {
            $_SESSION['username'] = $_POST['username'];
        }
    }
}


/*if (!$user) { // vérifie si l'utilisateur existe ou pas 
    echo "<b>Vous n'êtes pas inscrit. Veuillez vous inscrire d'abord.</b>";
} else {
    // 
    if (password_verify($_POST['password'], $user['password'])) {
        $_SESSION['username'] = $user['username'];
        echo "<b>Connexion réussie. Bienvenue " . htmlspecialchars($user['username']) . "!</b>";
    } else {
        echo "<b>Mot de passe incorrect.</b>";
    }
}*/
?>
