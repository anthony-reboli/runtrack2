<?php

$connexion = mysqli_connect("localhost","root","","jour08");
$requete ="SELECT (count(*))	FROM etudiants";
$query = mysqli_query($connexion, $requete);
$resultat = mysqli_fetch_all($query);

?>




<!DOCTYPE html>
<html>
<head>
<title>job06</title>
</head>

<body>
<table>
	<tr>
		<td>nb_etudiants</td>


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
