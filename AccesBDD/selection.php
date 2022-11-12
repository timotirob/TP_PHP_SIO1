<?php
require ('./ConnectionMySQL.php') ;

function selection($requeteSql) {
$statement = queryList($requeteSql) ;
$resultat = $statement->fetchAll() ;
print_r($resultat) ;
// var_dump si on veut le type des variables
}  // fin init
					
selection("select nom, prenom from ELEVES") ;

?>