<?php 
    // Fibonacci
	$fibonacci = array(0,1);
	$sequencia = 20;
	for($i = 1; $i <= $sequencia; $i++) {
		$fibonacci[] = array_sum($fibonacci);
        $fibonacci   = array_slice($fibonacci, 1, $sequencia, true);
        
        echo $fibonacci[$i] . " ";
    }
?>