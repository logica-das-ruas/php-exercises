<?php 
    $nota_a = 1;
    $nota_b = 1;
    $nota_c = 1;

    $media = ($nota_a + $nota_b + $nota_c) / 3;
    echo("Media do aluno: " . $media . "<br>");
    if ($media >= 7):
        echo "Ótimo!";
    elseif (($media <= 6) && ($media >= 4)):
        echo "Aprovado!";
    else:
        echo "Reprovado!";
    endif
?>