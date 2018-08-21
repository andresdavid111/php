<?php 

	$numero1= 25;
	$numero2= 14;
	$numero3= 13;

	if ($numero1 > $numero2)
	{
		if ($numero1 > $numero3)
		{
			echo "El número $numero1 es mayor que $numero2 y $numero3";
		}
	}
	else if ($numero2 > $numero3)
	{
		echo "El número $numero2 es mayor que $numero1 y $numero3";
	}
	else if ($numero3 > $numero2)
	{
		echo "El número $numero3 es mayor que $numero1 y $numero2";
	}
 ?>