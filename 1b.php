<?php
$numero = 11;
 
    for($i = 1;$i < $numero; $i++){
        if($numero % $i == 0){
            $primo++;
        }
    }
    if($primo >= 2 ){
        echo "No es primo";
    } else {
        echo "Es primo";
    }
?>