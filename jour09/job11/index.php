<?php
$connexion = mysqli_connect ("localhost", "root", "", "jour08");
$requete = "Select AVG(capacite) From salles;";
$query = mysqli_query($connexion, $requete);
$resultat = mysqli_fetch_all($query);
//var_dump($resultat);


?>
<table>
  <thead>
  <tr><th>capacite_moyenne</th></tr>
   </thead>
   <?php
   foreach ($resultat as $affich):?>
    <tr>
   <td><?php echo $affich[0] ?></td>
  
  
   </tr>
   <?php
     endforeach;
    ?>