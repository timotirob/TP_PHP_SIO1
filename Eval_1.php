<?php

$listePiedsNickeles = array('Croquignol', 'Ribouldingue', 'Filochard') ;

foreach ($listePiedsNickeles as $unPiedNickele)
    echo $unPiedNickele . "<BR>" ;

    $tableauEleves = array("Traore"=> 18,"Robert"=>17,"Da Silva"=>19,"Dupont"=>20,"Morales"=> 16) ;

    foreach ($tableauEleves as $nom => $note)
    echo "Quel élève méritant ce: $nom ! avec sa note $note <BR>" ;

$notesParMatieres = array("Bloc 1" => 18, "Bloc 3"=> 19, "CEJM" => 17, "CGE"=> 14, "Algo"=> 19, "Maths"=>18) ;

$listeNeveux = array('Riri', 'Fifi', 'Loulou') ;
echo "Les neveux de l'oncle Picsou sont: <BR>" ;
foreach ($listeNeveux as $unNeveu)
    echo $unNeveu . "<BR>" ;

