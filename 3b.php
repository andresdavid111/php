<?php 
	$temperatura=0;
	$tempmedia=0;

	for ($i=0; $i < 6 ; $i++) { 
		$temperatura = $_GET['temperatura'];
		$tempmedia+=$temperatura;
		if($temperatura>$tempAlta)
      {
        $tempAlta = $temperatura;
      }
      if($temperatura<$tempBaja)
      {
        $tempBaja = $temperatura;
      }
	}
	$tempmedia /= 6;
	echo "la temperatura media es $tempmedia";
	echo "la temperatura baja es $tempBaja";
	echo "la temperatura alta es $tempAlta";



  
 ?>


