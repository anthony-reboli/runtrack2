<?php

$connexion = mysqli_connect("localhost","root","","jour08");
$requete ="SELECT * FROM etudiants WHERE (YEAR(CURRENT_DATE) - YEAR(naissance)) > 18";
$query = mysqli_query($connexion, $requete);
$resultat = mysqli_fetch_all($query);

?>




<!DOCTYPE html>
<html>
<head>
<title>job05</title>
</head>

<body>
<table>
	<tr>
		<td>nom</td>
		<td>prenom</td>
		<td>naissance</td>
		<td>email</td>
		<td>sexe</td>

	</tr>
<?php 
foreach ($resultat as $fini): ?> 

<tr>
	<td><?php echo $fini[2] ?></td>
	<td><?php echo $fini[1] ?></td>
	<td><?php echo $fini[3] ?></td>
	<td><?php echo $fini[5] ?></td>
	<td><?php echo $fini[4] ?></td>
</tr>
<?php
endforeach; 
?>







</body>




</html>
