<?php

$connexion = mysqli_connect("localhost","root","","jour08");
$requete ="SELECT * FROM salles ORDER BY capacite DESC";
$query = mysqli_query($connexion, $requete);
$resultat = mysqli_fetch_all($query);
var_dump($resultat);
?>




<!DOCTYPE html>
<html>
<head>
<title>job07</title>
</head>

<body>
<table>
	<tr>
		<td>nom</td>


	</tr>
<?php 
foreach ($resultat as $fini): ?> 

<tr>
	<td><?php echo $fini[0] ?></td>
</tr>
<?php
endforeach; 
?>







</body>




</html>
