
<form action="index.php" method="get">
	<input type="text" name="prenom" placeholder="Prénom">
	<input type="submit" name="valider" value="Valider">
	<input type="submit" name="suppr" value="Supprimer liste">
</form>



<?php

session_start();



if((!isset($_GET['prenom']))&&(empty($_GET['suppr'])))
{
    $_SESSION['liste'] = array();
}

if((isset($_GET['prenom']))&&(empty($_GET['suppr'])))
{
    array_push($_SESSION['liste'], $_GET['prenom']);

    foreach($_SESSION['liste'] as $key => $val)
    { 
        echo "$val <br>";
		
    }
}
	

if(!empty($_GET['suppr']))
{
//	unset($_SESSION['liste']);
    $_SESSION['liste'] = array();

}


?>
