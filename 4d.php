<?php

$a = 2;
$b = 3;
$saldo=1000000;
$consignar=0;
$retiro=0;

echo "Escoja una opcion<br>";
echo "1.)Consignar saldo.<br>";
echo "2.)Retirar el saldo.<br>";
echo "3.)Ver Saldo.<br>";
switch($a){
	case 1:
	echo "<br>Consigne saldo: <br>";
	echo "1.) 2000000<br>";
	echo '2.) 1500000<br>';
	echo "3.) 1000000<br>";
	switch($b){
	case 1:
		echo "Usted consigno 2000000<br>";
		$saldo+=2000000;
		break;
	case 2:
		echo "Usted consigno 1500000<br>";
		$saldo+=1500000;
		break;
	case 3:
		echo "Usted consigno 1500000<br>";
		$saldo+=1000000;
		break;
		}
	break;
	case 2:
	echo "<br>Retire dinero: <br>";
	echo "1.) 800000 <br>";
	echo "2.) 500000 <br>";
	echo "3.) 300000 <br>";
	switch($b){
	case 1:
		echo "Usted retiro 800000<br>";
		$saldo-=800000;
		break;
	case 2:
		echo "Usted retiro 500000 <br>";
		$saldo-=500000;
		break;
	case 3:
		echo "Usted retiro 300000<br>";
		$saldo-=300000;
		break;
	}
	case 3:
	echo "Su saldo total es de " .$saldo;
}


?>