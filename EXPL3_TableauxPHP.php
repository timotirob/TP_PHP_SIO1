<?php
echo "<BR>" ;

$elevesSIO = array('Abchiche', 'Anton', 'Beaudoux', 'Desir','Diatta','Sandhu','Sandoz');


print_r($elevesSIO) ;
echo "<BR>" ;

$elevesSIO[2] = 'Robert' ;

print_r($elevesSIO) ;
echo "<BR>" ;

   if(
    array_key_exists(3, $elevesSIO)
    
    ) 
   echo "Le 3ème élément existe" ;
   else echo "pas de 3ème élément" ;

 echo "<BR>" ;
   
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

$paysCapitales = array('France' => 'Paris', 'Portugal' => 'Porto', 'Italie' => 'Rome' );

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