<?php 
$numero_sorteado= rand(1,99);
echo $numero_sorteado. "<br>";

switch($numero_sorteado){
    case 17:
        echo "João venceu";
        break;
    case 67:
        echo "Leonardo venceu";
        break;
    case 21:
        echo "Esdras venceu";
        break;
    case 33:
        echo "Igor venceu";
        break;
    case 12:
        echo "Manu venceu";
        break;
    case 7:
        echo "Vini venceu";
        break;
    case 4:
        echo "Maculan venceu";
        break;
    case 69:
        echo "Thales venceu";
        break;
    case 60:
        echo "Cauã venceu";
        break;
    case 75:
        echo "Zimmermann venceu";
        break;
    default:
        echo "Ninguém venceu";
                                    
                                        }
?>