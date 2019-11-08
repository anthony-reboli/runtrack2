<form method="get" action="index.php">
	<label>argument</label>
	<input type= "text" name="argument"/>
	<label>valeur</label>
	<input type="text" name="valeur"/>
	<input type="submit" value="ok"/>
</form>
<table>
	<tr>
	<th>argument</th>

	<th>valeur</th>
</tr>

<?php




foreach ($_GET as $cle =>$value){
	echo "<tr>";
	echo "<td>";
	echo $cle;
	echo "</td>";
	echo "<td>";
	echo $value;
	echo"</td>";
	echo "</tr>";

}

?>
</table>