<?php

$connexion = mysqli_connect("localhost","root","","jour08");
$requete ="SELECT nom,prenom,naissance FROM `etudiants` WHERE `sexe` LIKE 'Femme' ";
$query = mysqli_query($connexion, $requete);
$resultat = mysqli_fetch_all($query);

?>




<!DOCTYPE html>
<html>
<head>
<title>job0</title>
</head>

<body>
<table>
	<tr>
		<td>nom</td>
		<td>prenom</td>
		<td>naissance</td>

	</tr>
<?php 
foreach ($resultat as $fini): ?> 

<tr>
	<td><?php echo $fini[1] ?></td>
	<td><?php echo $fini[0] ?></td>
	<td><?php echo $fini[2] ?></td>
</tr>
<?php
endforeach; 
?>
</table>







</body>




</html>
