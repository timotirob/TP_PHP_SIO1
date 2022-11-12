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



echo "<BR>" ;
   if(
    array_key_exists(9, $elevesSIO)
    ) 
   echo "Le 9ème élément existe" ;
   else echo "pas de 9ème élément" ;
echo "<BR>" ;

unset($elevesSIO[7]);

print_r($elevesSIO) ;
echo "<BR>" ;

echo 'Le tableau $elevesSIO contient: '.count($elevesSIO) ;

echo "<BR>" ;

foreach ($elevesSIO as $unEleve) {
    echo "quel rigolo ce $unEleve ! <BR>" ;
}

$notes = array(15, 14, 16, 17, 14, 18, 15) ;
print_r($notes) ;

echo "<BR>" ;
$mixte = array('c\' est en faisant n\'importe quoi', 150, 8.5);
print_r($mixte) ;

echo "<BR>" ;


$elevesNotes = array('chouchou' => 19, 'cancrounet' => 2, 'robert' => 19.5 );
print_r($elevesNotes);
echo "<BR>" ;

$elevesNotes['robert'] = 20 ;

print_r($elevesNotes);


echo "<BR>" ;

foreach ( $elevesNotes as $nomEleve => $noteEleve ) {
    echo "L'élève $nomEleve a eu pour note: $noteEleve <BR>" ;
}




$mixteAssoc = array('c\' est en faisant n\'importe quoi' => 0 , 150 => 'bien', 'carotte' => 8.5);
print_r($mixteAssoc) ;

unset($mixteAssoc) ;
print_r($mixteAssoc) ;


echo "<BR>" ;

$paysCapitales = array('France' => 'Paris', 'Portugal' => 'Porto', 'Italie' => 'Rome' );

if (
    array_key_exists('France', $paysCapitales)
)
echo "Yes France" ;
echo "<BR>" ;

if (
    array_key_exists('Corée', $paysCapitales)
)
echo "Yes Corée" ;
else echo "Pas dans le tableau" ;

echo "<BR>" ;

print_r($paysCapitales);
echo "<BR>" ;


unset($paysCapitales['Italie']) ;

print_r($paysCapitales);