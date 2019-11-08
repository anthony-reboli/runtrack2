
<form action="index.php" method="get"/>
	<input type="text" name="speudo"/>
	<input type="text" name="mdp"/>
	<input type="submit" value="valider"/>
</form>




<?php
$nombre=0;

foreach ($_GET as $cle => $value) {
 echo $cle.":".$value."<br/>";
 $nombre=$nombre+1;

}
 echo $nombre;
?>
