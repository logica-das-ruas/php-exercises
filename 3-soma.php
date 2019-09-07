<?php 
// 3) Crie uma variável com valor inicial e uma com valor final e calcule a soma dos números existentes entre eles.

    $valor_inicial = 1;
    $valor_final = 3;

    for ($i = $valor_inicial; $i <= $valor_final; $i++) { 
        echo(($i += $i) . "<br>");   
    }   

?>