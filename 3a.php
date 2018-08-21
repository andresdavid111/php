<?php 
$resultado1 =0;
$resultado2 =0;

for ($i=0; $i < 11 ; $i++) { 
	$resultado1=$i;

	$resultado1=$resultado1^2;
	$resultado2+=$resultado1;
}

echo "el resultado es $resultado2";
 ?>