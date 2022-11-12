<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<FORM >
  <select name="BTS" id="pet-select">
    <option value="">--Choisissez votre BTS--</option>
    <option value="dog">SIO</option>
    <option value="cat">NRC</option>
    <option value="hamster">CI</option>
  </select>

  <select name="CCF" id="pet-select">
    <option value="">--Choisissez votre épreuve--</option>
    <option value="dog">E4 : Support et mise à disposition de services informatiques</option>
    <option value="cat">E5 : Administration des systèmes et des réseaux</option>
    <option value="hamster">E5 : conception et développement d’applications</option>
    <option value="hamster">EF4 : engagement étudiant</option>
  </select>

<?php
$instructions = $connection->prepare('select codeCCF From referentielCCD where codeBTS = "SIO"');
$instructions->execute();
$donneesCCF = $instructions->fetchAll();
?>

<select name="ccfChoisi" id="ccfChoisi">
<?php foreach ($donneesCCF as $unCCF): ?>
    <option><?=$unCCF["codeCCF"]?></option>
<?php endforeach ?>
</select>

</FORM>

</body>
</html>