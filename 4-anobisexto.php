<!-- 4) Crie uma variável do tipo inteiro com o valor de um ano qualquer no formato AAAA 
e então verifique se o ano é bissexto.
Um ano é bissexto se ele for divisível por 400 ou se for divisível por 4 e não por 100. -->
<?php 

$ano = 2010;

if ($ano % 400 === 0 || ($ano % 4 === 0 && $ano % 100 !== 0)) {
    echo "ano bisexto";
} else {
    echo "ano normal";
}

?>