<?php
$a=3;
$operation="+";
$b="3";

function calcul($a,$operation,$b)
{
	if ($operation == "+" )
	{ 
		$calculer = $a + $b;
	}

	elseif($operation == "-" )
	{ 
		$calculer = $a - $b;
	}


		elseif($operation == "*" )
	{ 
		$calculer = $a * $b;
	}

			elseif($operation == "/" )
	{ 
		$calculer = $a / $b;
	}

				elseif($operation == "%" )
	{ 
		$calculer = $a % $b;
	}


	return($calculer);
}
echo calcul($a,$operation,$b);


?>