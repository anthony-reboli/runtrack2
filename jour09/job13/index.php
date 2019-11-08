<?php
$connexion = mysqli_connect ("localhost", "root", "", "jour08");
$requete = "Select salles.nom, etage.nom FROM salles, etage where salles.id_etage = etage.id;";
$query = mysqli_query($connexion, $requete);
$resultat = mysqli_fetch_all($query);
//var_dump($resultat);


?>
<table>
	<thead>
	<tr><th>nom des salles</th><th>etage</th></tr>
   </thead>
   <?php
   foreach ($resultat as $affich):?>
   	<tr>
   <td><?php echo $affich[0] ?></td>
   <td><?php echo $affich[1] ?></td>
   
   </tr>
   <?php
     endforeach;
    ?>