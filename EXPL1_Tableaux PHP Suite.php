<?php

// Liste d'élèves du BTS SIO
$elevesSIO = array('Abchiche', 'Anton', 'Beaudoux', 'Desir','Diatta','Sandhu','Sandoz');

// On affiche la liste "telle quelle" puis ensuite un retour de ligne
print_r($elevesSIO) ;
echo "<BR>" ;

// On remplace le 3ème élément par un "intrus"
$elevesSIO[2] = 'Robert' ;

// on affiche à nouveau la liste "telle quelle" puis ensuite un retour de ligne
print_r($elevesSIO) ;
echo "<BR>" ;


// Test avec l'instruction if: si le 3ème élément existe, on affiche "Le 3ème élément existe"
// sinon on affiche "pas de 3ème élément"

   if (array_key_exists(3, $elevesSIO) ) 
   echo "Le 3ème élément existe" ;
   else echo "pas de 3ème élément" ;

 echo "<BR>" ;
   
 // on affiche directement le résultat de savoir si l'élément Anton fait partie du tableau
 // $elevesSIO
 
 echo in_array('Anton', $elevesSIO)  ;
    
    echo "<BR>" ;

echo in_array('Ducobu', $elevesSIO)  ;
    
    echo "<BR>" ;

// déclaration d'un tableau associatif avec pour clef le pays et pour valeur la capitale associée
$paysCapitales = array('France' => 'Paris', 'Portugal' => 'Porto', 'Italie' => 'Rome' );

print_r($paysCapitales);
echo "<BR>" ;

// on boucle sur le tableau associatif pour écrire : 
// Quelle merveilleuse capitale que XXX pour ce beau pays YYY  où XXX est la capitale et YYY le pays.