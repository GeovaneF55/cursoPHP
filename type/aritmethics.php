<div class="title">Operações Aritméticas</div>

<?php
  echo 1 + 1, '<br>'; // 2
  var_dump(1 + 1);
  echo '<br>';

  echo 1 + 2.5, '<br>'; // 3.5
  var_dump(1 + 2.5);
  echo '<br>';

  echo 10 - 2, '<br>'; // 8
  var_dump(10 - 2);
  echo '<br>';

  echo 2 * 5, '<br>'; // 2 * 5 = 10
  var_dump(2 * 5);
  echo '<br>';

  echo 7 / 4, '<br>'; // Divide inteiro
  var_dump(7 / 4);
  echo '<br>';

  echo intdiv(7, 4), '<br>'; // intdiv() é uma função do PHP que retorna o resultado da divisão inteira
  var_dump(intdiv(7, 4));
  echo '<br>';

  echo round(7 / 4), '<br>'; // Retorna o valor arredondado
  var_dump(round(7 / 4));
  echo '<br>';

  echo 7 % 4, '<br>';
  var_dump(7 % 4); // Resto da divisão
  echo '<br>';

  echo 8 % 2, '<br>'; // Par
  echo 7 % 2, '<br>'; // Ímpar
  
  echo 7 / 0, '<br>'; // Erro -> INF
  // echo intdiv(7, 0), '<br>'; // Erro -> Error

  echo 4 ** 2, '<br>'; // 4 elevado a 2

  // Precedência de operadores
  // () => ** => / * % => + -

  echo "<p class='divide'>Precedência</p>";
  echo 2 + 3 * 4, '<br>'; // 14
  echo (2 + 3) * 4, '<br>'; // 20
  echo 2 + 3 * 4 ** 2, '<br>'; // 50
  echo ((2 + 3) * 4) ** 2, '<br>'; // 400