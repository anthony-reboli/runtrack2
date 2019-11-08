

<?php 

$min= 0;


 while ($min != 101)
 {
 	if ($min <= 20)
 	{
 		echo "<i>$min</i>";
 	}

 	elseif($min>=25&&$min<= 50&&$min!=42)

 	{
 		echo "<u>$min</u>";
 	}
 	elseif($min==42)

 	{
 		echo "<u>La Plateforme_</u>";
 	}

 	else{
 		echo $min;
 	}
 	echo "<br>";
 	$min++;
}
 	
 	
 	?>