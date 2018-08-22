<?php

$numero=15;
$entero;
$residuo; 


$entero = $numero/100; 
$residuo = $numero%100;

switch($entero){
	case 1:
	echo "C"; 
	break; 

    case 2: 
    echo "CC"; 
    break; 

    case 3: 
    echo "CCC"; 
    break; 

    case 4: 
    echo "CD"; 
    break; 

    case 5: 
    echo "D"; 
    break; 

    case 6: 
    echo "DC"; 
    break; 

    case 7: 
    echo "DC C"; 
    break; 

    case 8: 
    echo "DCCC"; 
    break;

    case 9: 
    echo "CM"; 
    break; 
} 

	
$entero = $residuo/10; 
$residuo = $residuo%10; 

switch($entero) {
	case 1: 
	echo "X"; 
	break; 

    case 2: 
    echo "XX"; 
    break; 

    case 3: 
    echo "XXX"; 
    break; 

    case 4: 
    echo "XL"; 
    break;

    case 5: 
    echo "L"; 
    break; 

    case 6: 
    echo "LX"; 
    break; 

    case 7: 
    echo "LXX"; 
    break; 

    case 8: 
    echo "LXXX"; 
    break; 

    case 9: 
    echo "XC"; 
    break; 
}


switch($residuo) {
	case 1: 
	echo "I"; 
	break; 

    case 2: 
    echo "II"; 
    break; 

    case 3: 
    echo "III"; 
    break; 

    case 4: 
    echo "IV"; 
    break; 

    case 5: 
    echo "V"; 
    break; 

    case 6: 
    echo "VI"; 
    break; 

    case 7: 
    echo "VII"; 
    break; 

    case 8: 
    echo "VIII"; 
    break; 

    case 9: 
    echo "IX"; 
    break; 
}	

?>