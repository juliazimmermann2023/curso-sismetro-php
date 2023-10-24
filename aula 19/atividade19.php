<?php

$lista = array(
    array("Banco de Dados",85),
    array("Análise",90),
    array("Ciências da Computação",70),
    array("Front end",90),
    array("Prog mobile",89),
    array("Português",85),
    array("Matemática",98),
    array("Geografia",90),
    array("Inglês",100),
    array("História",85),
    array("Química",78),
    array("Biologia",88),
    array("Sociologia",87),
    array("Projeto de vida",79),
    array("Ed financeira",95),
);
echo "<br/><br/><br/>";
foreach($lista as $item){
    echo $item[0]." - ".$item[1]."<br/>";
}

 ?>
