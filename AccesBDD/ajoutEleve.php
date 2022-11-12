<?php
require ('./ConnectionMySQL.php') ;

$nom = $_POST['nom'];
$prenom = $_POST['prenom'] ;

$connection = getConnection();

$statement = $connection->prepare("INSERT INTO ELEVES(nom,prenom) VALUES(?,?)");

$statement->bindParam(1, $nom, PDO::PARAM_STR);
$statement->bindParam(2, $prenom, PDO::PARAM_STR);

$statement->execute() ;


					

?>