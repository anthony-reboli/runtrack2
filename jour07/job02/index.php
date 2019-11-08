	
<?php setcookie("nbvisites",0);



if((isset ($_COOKIE["nbvisites"]))&&(empty($_GET['suppr'])))
{

		setcookie("nbvisites",$_COOKIE['nbvisites']+1,0);
		echo $_COOKIE['nbvisites'];
}

else
{
	setcookie("nbvisites",$_COOKIE['nbvisites']=0,0);
	echo $_COOKIE['nbvisites'] ;
}

if(!empty($_GET['suppr']))
{

unset($_COOKIE['nbvisites']);

}
?>



<form method="get">
<input type="submit" name="suppr" value="Rénitialiser compteur">


</form>