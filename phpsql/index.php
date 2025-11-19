<?php
 
try {
$mysqlClient =  new PDO(
    'mysql:host=localhost;dbname=jo;charset=utf8',
    'root',
    ''
);
} catch(PDOexception $e){
    die($e->getMessage());
}


$query = $mysqlClient->prepare(query: "SELECT * FROM jo.`100`;");
$query->execute();

$data = $query->fetchAll();
var_dump($data);


$mysqlClient = null;
$dbh = null;

$data = $sth->fetchAll(mode: PDO::FETCH_ASSOC);

foreach ($data as $value) {
    echo $value["nom"] . " : " . $value["temps"] . "<br/>";
}
 
?>