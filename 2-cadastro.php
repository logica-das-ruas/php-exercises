<form action="2-cadastro.php" method="post">
   <label>Código do cliente:<label>
   <input type="number" name="cod-cliente" placeholder="Código">
   <br>
   <label>Nome do cliente:<label>
   <input type="text" name="nome" placeholder="Nome">
   <br>
   <label>Quantidade de KWh:<label>
   <input type="number" name="kwh" placeholder="Quantidade de KWh">
   <br>
   <label>Tipo de consumidor:<label>
   <select name="tipo-consumidor">
      <option value="residencial">Residencial</option>
      <option value="comercial">Comercial</option>
      <option value="industria">Indústria</option>
   </select>
   <br>
   <button type="submit">Enviar formulário</button>
</form>

<?php

$kwh = $_POST["kwh"];
$tipo_consumidor = $_POST["tipo-consumidor"];
$valor_base = 4;
$valor_cobrado = 0;

if ($kwh) {
   if ($tipo_consumidor === 'residencial') {
      $valor_cobrado = $kwh * ($valor_base * 0.8);
   } else if ($tipo_consumidor === 'comercial') {
      $valor_cobrado = $kwh * ($valor_base * 0.9);
   } else {
      $valor_cobrado = $kwh * $valor_base;
   }
}


echo "<p>Código do Cliente: " . $_POST["cod-cliente"] . "</p>";
echo "<p>Nome: " . $_POST["nome"] . "</p>";
echo "<p>Quantidade de KWh: " . $kwh . "</p>";
echo "<p>Tipo de consumidor: " . $tipo_consumidor . "</h1>";
echo "<p>Valor a ser pago: " . $valor_cobrado . "</h1>";

?>
