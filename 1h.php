<?php 


$numero1= 14;
	$numero2= 29;
	$numero3= 35;

if ($numero1 > $numero2 && $numero1 > $numero3)
{
	if ($numero2 > $numero3)
	{
		echo "N. ($numero1), ($numero2), ($numero3)";
	}
	else{
		echo "N. ($numero1), ($numero3), ($numero2)";
	}
}
else if ($numero2 > $numero3 )
{
	if ($numero1>$numero3)
	{	
	echo "N. ($numero2), ($numero1), ($numero3)";	
	}
	else{
		echo "N. ($numero2), ($numero3), ($numero1)";
	}
	
}
else 
{
	if ($numero1>$numero2)
	{	
	echo "N. ($numero3), ($numero1), ($numero2)";	
	}
	else{
		echo "N. ($numero3), ($numero2), ($numero1)";
	}
	
}
 ?>