<?php 
$variable=2;
$finciclo=3;
$resultado=0;
$resultado2=0;
for ($i=1; $i <=$finciclo ; $i++) { 

	$resultado=$variable^$i;
	$resultado2=$resultado2+$resultado;
	
}
echo "$resultado2";

 ?>