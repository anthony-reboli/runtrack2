<?php

$connexion = mysqli_connect("localhost","root","","jour08");
$requete ="select capacite,nom from salles ";
$query = mysqli_query($connexion, $requete);
$resultat = mysqli_fetch_all($query);

?>




<!DOCTYPE html>
<html>
<head>
<title>job01</title>
</head>

<body>
<table>
	<tr>
		<td>nom</td>
		<td>capacite</td>

	</tr>
<?php 
foreach ($resultat as $fini): ?> 

<tr>
	<td><?php echo $fini[1] ?></td>
	<td><?php echo $fini[0] ?></td>
</tr>
<?php
endforeach; 
?>







</body>




</html>
