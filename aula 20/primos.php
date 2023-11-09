<?php
function isPrimo($posicao) {
    $primos= array(2);
    $num = 3;
    while(count($primos) < $posicao){
        $v_primo = true;
    foreach($primos as $primo){
        if($num%$primo == 0){
            $v_primo = false;
        }
    }
    if($v_primo){
        $primos[] = $num;
    }
    $num++;
        }
        return$primos[$posicao - 1];
    }
   
echo isPrimo($_GET["posicao"]);
?>