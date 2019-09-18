<?php
$nom = $_POST['nom'];
$datedenaissance = $_POST['datedenaissance'];
$numerodecompte = $_POST['numerodecompte'];
$link = mysqli_connect("172.17.0.2","root","","projet");
mysqli_query($link,"insert into client values (0,\"".$nom."\",\"".$datedenaissance."\",\"".$numerodecompte."\")");
$sql="insert into client values (0,\"".$nom."\",\"".$datedenaissance."\",\"".$numerodecompte."\")";
echo $sql;
?>

