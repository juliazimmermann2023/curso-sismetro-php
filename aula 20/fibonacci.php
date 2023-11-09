<?php
//sequencia fibonacci

function fibo($fibon){
 $fibonacci = array();
 $fibonacci[0]= 1;
 $fibonacci[1]= 1;
    for ($valor = 2; $valor < $fibon; $valor++) {
        $fibonacci[$valor] = $fibonacci[$valor - 1] + $fibonacci[$valor - 2];
        
    }
    return $fibonacci[$fibon - 1];
    
}
echo fibo(10);
?>
