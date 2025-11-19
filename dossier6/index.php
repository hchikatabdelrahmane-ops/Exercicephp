<?php //
 
try {
$mysqlClient =  new PDO(
    'mysql:host=localhost;dbname=jo;charset=utf8',
    'root',
    ''
);
} catch(PDOexception $e){
    die($e->getMessage());
} //pour connecter a la base de donee 
 
//  Lire depuis l'URL au lieu de mettre en dur
$sort = isset($_GET['sort']) ? $_GET['sort'] : "nom"; //
$order = isset($_GET['order']) ? $_GET['order'] : "desc";
 

$query = $mysqlClient->prepare('select * from jo.`100` ORDER BY '.$sort . ' ' . $order);
$query->execute();
 
$data = $query->fetchAll(); // recuperer les ligne de la table jo 
 
Global $temp ;
 
function changeorder($token){
    if($token=='Nom'){
        $sort = "nom";
    }   
    if($token=='Pays'){
        $sort = "nom";
    }
    if($token=='Course'){
        $sort = "nom";
    }
    if($token=='Temps'){
        $sort = "nom";
    }   
    $temp++ ;
}
   

// $mysqlClient = null;
// $dbh = null;


?>  
<?php $toggle = ($order === 'ASC') ? 'DESC' : 'ASC'; ?>
<table>
    <thead> 
        <tr>
             <th><a href="?sort=nom&order=<?php echo ($sort === 'nom') ? $toggle : 'ASC'; ?>">Nom [↑↓]</a></th>
            <th><a href="?sort=pays&order=<?php echo ($sort === 'pays') ? $toggle : 'ASC'; ?>">Pays [↑↓]</a></th>
            <th><a href="?sort=course&order=<?php echo ($sort === 'course') ? $toggle : 'ASC'; ?>">Course [↑↓]</a></th>
            <th><a href="?sort=temps&order=<?php echo ($sort === 'temps') ? $toggle : 'ASC'; ?>">Temps [↑↓]</a></th>

        </tr>
    </thead>


   

   <h1>Ajouter un résultat : </h1>
<form method="post">
    <label>Nom : </label>
    <input type="text" name="nom"><br/>
    
 
    <label>Pays : </label>
    <input type="text" name="pays"><br/>
 
    <label>Course : </label>
    <input type="text" name="course"><br/>
 
    <label>Temps : </label>
    <input type="number" name="temps">

    <input type="submit" class="mt-3">
 
</form>
 
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // pour voir si tt est bien rempli 
    if (!empty($_POST['nom']) && !empty($_POST['pays']) && !empty($_POST['course']) && is_numeric($_POST['temps'])) {
        $nom = $_POST['nom'];
        $pays = $_POST['pays'];
        $course = $_POST['course'];
        $temps = $_POST['temps'];

        // execute et insere 
        $insert = $mysqlClient->prepare("INSERT INTO jo.`100` (nom, pays, course, temps) VALUES (:nom, :pays, :course, :temps)");
        $insert->execute([
            'nom' => $nom,
            'pays' => $pays,
            'course' => $course,
            'temps' => $temps
        ]);
    }
}

?>

<?php foreach($data as $value) { ?>
    <tr>
        <td><?php echo $value["nom"]; ?></td>
        <td><?php echo $value["pays"]; ?></td>
        <td><?php echo $value["course"]; ?></td>
        <td><?php echo $value["temps"]; ?></td>
    </tr>
    
<?php }  ?>  
</table>
<?php 
$mysqlClient = null; 
// html 
?>