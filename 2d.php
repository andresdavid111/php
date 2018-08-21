<?php 

$numero = 0 ;
$contador = 0;
while ($contador <= 50) {
	
	if ($contador % 2 !=0) {
		$numero+=$contador;
	}
	$contador++;
}
echo "el resultado es $numero";
?>