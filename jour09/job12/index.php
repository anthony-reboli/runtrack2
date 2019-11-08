<?php
$connexion = mysqli_connect ("localhost", "root", "", "jour08");
$requete = "Select prenom,nom,naissance 
FROM etudiants WHERE YEAR(naissance) BETWEEN '1998' AND '2018';";
$query = mysqli_query($connexion, $requete);
$resultat = mysqli_fetch_all($query);
//var_dump($resultat);


?>
<table>
  <thead>
  <tr><th>prenom</th><th>nom</th><th>naissance</th></tr>
   </thead>
   <?php
   foreach ($resultat as $affich):?>
    <tr>
   <td><?php echo $affich[0] ?></td>
   <td><?php echo $affich[1] ?></td>
   <td><?php echo $affich[2] ?></td>
  
   </tr>
   <?php
     endforeach;
    ?>