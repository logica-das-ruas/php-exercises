<?php 
// 6) Crie um array com 15 valores inteiros e imprima somente os valores pares.

    $intArray = array(7, 2, 4, 6, 10, 99, 5, 4, 6, 43, 3, 88, 12, 64, 33);

    foreach ($intArray as $item) {
        if ($item % 2 == 0)
            echo "numero par: $item<br>";
    }

?>