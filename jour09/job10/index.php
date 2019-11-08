<?php
$connexion = mysqli_connect ("localhost", "root", "", "jour08");
$requete = "Select * FROM salles ORDER BY capacite ASC;";
$query = mysqli_query($connexion, $requete);
$resultat = mysqli_fetch_all($query);
//var_dump($resultat);


?>
<table>
	<thead>
	<tr><th>id</th><th>nom</th><th>etage</th><th>capacite</th></tr>
   </thead>
   <?php
   foreach ($resultat as $affich):?>
   	<tr>
   <td><?php echo $affich[0] ?></td>
   <td><?php echo $affich[1] ?></td>
   <td><?php echo $affich[2] ?></td>
   <td><?php echo $affich[3] ?></td>
  
   </tr>
   <?php
     endforeach;
    ?>
