<div class="title">Variáveis</div>

<?php
  $numberA = 13;
  echo $numberA, "<br>";
  var_dump($numberA);

  echo "<br>";
  
  $a = 3;
  $b = 16;
  $sum = $a + $b;
  echo $sum, "<br>";
  echo isset($sum), "<br>";

  unset($sum);
  echo isset($sum), "<br>";
  var_dump($sum);

  echo "<br>";

  $variable = 10;
  echo $variable, "<br>";

  $variable = "Agora sou uma string";
  echo $variable, "<br>";

  // Nomes de variáveis
  $var = 'válida';
  $var2 = 'válida';
  $VAR3 = 'válida';
  $_var_4 = 'válida';
  $vâr4 = 'válida'; // evitar
  // $6var = 'inválida';
  // $%var7 = 'inválida';
  // $var8% = 'inválida';

  var_dump($_SERVER['HTTP_HOST']);