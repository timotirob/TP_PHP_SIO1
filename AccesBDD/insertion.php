<?php
require ('./ConnectionMySQL.php') ;

$nom = "Robert";
$prenom = "Tim" ;

$connection = getConnection();

$statement = $connection->prepare("INSERT INTO ELEVES(nom,prenom) VALUES(:nom,:prenom)");

$statement->bindParam(':nom', $nom, PDO::PARAM_STR);
$statement->bindParam(':prenom', $prenom, PDO::PARAM_STR);

$statement->execute() ;


					

?>