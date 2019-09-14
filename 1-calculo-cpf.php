<?php 
function validaCpfPrimeiroDigito($cpf) {
    $cpf = preg_replace('/[^0-9]/', '', $cpf);
    validarCpfValido($cpf);

    $d1;
    $soma = 0;
    for ($i=0, $j=1; $i < 9; $i++, $j++) { 
        $d1 = $cpf{$i} * $j;
        $soma += $d1;
    }
    $resultado = $soma % 11;
    
    if ($resultado === 10) {
        $resultado = 0;
    }

    return $resultado;
}

function validaCpfSegundoDigito($cpf) {
    $cpf = preg_replace('/[^0-9]/', '', $cpf);
    validarCpfValido($cpf);

    $d2;
    $soma = 0;
    for ($i=0; $i < 9; $i++) {
        $d2 = $cpf{$i} * $i;
        $soma += $d2;
    }
    $ultima_validacao = $soma + (validaCpfPrimeiroDigito($cpf) * 9);
    $resultado = $ultima_validacao % 11;

    if ($resultado === 10) {
        $resultado = 0;
    }

    return $resultado;
}


function validarCpfValido($cpfParaValidar) {
    if (strlen($cpfParaValidar) != 11) {
        echo 'tamanho invalido';
        return false;
    } else if (preg_match('/(\d)\1{10}/', $cpfParaValidar)) {
        echo 'cpf invalido';
        return false;
    } else {
        return true;
    }
}

echo validaCpfPrimeiroDigito('111.505.340-01');
echo validaCpfSegundoDigito('860.199.230-70');
echo '  ';
echo validaCpfPrimeiroDigito('560.887.020-44');
echo validaCpfSegundoDigito('560.887.020-44');
?>