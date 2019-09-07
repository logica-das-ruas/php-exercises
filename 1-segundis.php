<?php
   // 1) Crie uma variável com um número definido de segundos, a partir dela mostre quanto tempo
   // esses segundos possuem sendo apresentados
   // no formato dias, horas, minutos e segundos. 
   // Ex: Em 200000 segundos temos: 2 dias, 7 horas, 33 minutos e 20 segundos.
   
   $entrada = 200000;
   $dias = floor($entrada / 86400);
   $horas = floor($entrada / 3600);
   $minutos = floor(($entrada - ($horas * 3600)) / 60);
   $segundos = floor($entrada % 60);

   echo($dias . " dias, " . $horas . " horas, " . $minutos . " minutos, " . $segundos . " segundos.");
?>
