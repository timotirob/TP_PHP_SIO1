<?php
$tableauEleves = array("Traore"=> 18,"Robert"=>17,"Da Silva"=>19,"Dupont"=>20,"Morales"=> 16) ;

    foreach ($tableauEleves as $nom => $note)
    echo "Quel élève méritant ce: $nom ! avec sa note $note <BR>" ;

/*$clefsDuTableauEleves = array_keys($tableauEleves);
for ($i=0;$i<count($clefsDuTableauEleves);$i++)
    echo "Quel élève méritant ce: ".$clefsDuTableauEleves[$i]." ! avec sa note ".$tableauEleves[$clefsDuTableauEleves[$i]]."<BR>" ;
*/

$clefsDuTableauEleves = array_keys($tableauEleves);
$i=0 ;
while ($i < count($clefsDuTableauEleves)) {
    echo "Quel élève méritant ce: ".$clefsDuTableauEleves[$i]." ! avec sa note ".$tableauEleves[$clefsDuTableauEleves[$i]]."<BR>" ;
    $i++ ;
}

$notesParMatieres = array("Bloc 1" => 18, "Bloc 3"=> 19, "CEJM" => 17, "CGE"=> 14, "Algo"=> 19, "Maths"=>18) ;

foreach ($notesParMatieres as $matiere => $note)
echo "Pour cette belle matière $matiere j'ai eu la note de $note !<BR>";

$clefsDuTableauNotesMatieres = array_keys($notesParMatieres);
for ($i=0;$i<count($clefsDuTableauNotesMatieres);$i++)
    echo "Pour cette belle matière ".$clefsDuTableauNotesMatieres[$i]." j'ai eu la note de  ".$notesParMatieres[$clefsDuTableauNotesMatieres[$i]]."<BR>" ;


$clefsDuTableauNotesMatieres = array_keys($notesParMatieres);
$i=0 ;
while ($i<count($clefsDuTableauNotesMatieres)) {
    echo "Pour cette belle matière ".$clefsDuTableauNotesMatieres[$i]." j'ai eu la note de  ".$notesParMatieres[$clefsDuTableauNotesMatieres[$i]]."<BR>" ;
    $i++ ;
}

echo "<A href='cibleGet.php?monNom=personne'> Clique pour voir </A>" ;

echo "<BR>" ;
echo "<FORM action='ciblePost.php' method='POST'>"  ;
echo "<INPUT TYPE='text' name='monNom'> </INPUT>";
echo "<INPUT TYPE='submit' value='submit' > </INPUT>";
echo "</FORM>" ;

