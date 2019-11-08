<form action="index.php" method="post"/>
<label>username</label>
	<input type="text" name="username"/>
	<label>password</label>
	<input type="password" name="password"/>
	<input type="submit" value="valider"/>
</form>



<?php
$i=0;


if ($_POST == true){
 
 if($_POST["username"] == "John"&&$_POST["password"]== "Rambo")
 {
 	echo "C’est pas ma guerre";
 }
 else{
echo "Votre pire cauchemar.";
 }

}
 	

?>