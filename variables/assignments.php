<div class="title">Atribuições</div>

<?php
  // Número
  $number = 10;
  echo $number . "<br>";

  $number = $number - 3;
  echo $number . "<br>";

  $number = $number + 1.5;
  echo $number . "<br>";

  $number--; // $number = $number - 1;
  --$number; // $number = $number - 1;
  echo $number . "<br>";

  $number++; // $number = $number + 1;
  ++$number; // $number = $number + 1;
  echo $number . "<br>";

  $number = 20;
  echo $number . "<br>";

  $number -= 5; // $number = $number - 5;
  echo $number . "<br>";

  $number += 5; // $number = $number + 5;
  echo $number . "<br>";

  $number *= 10; // $number = $number * 5;
  echo $number . "<br>";

  $number /= 2; // $number = $number / 2;
  echo $number . "<br>";

  $number %= 6; // $number = $number % 6;
  echo $number . "<br>";

  $number **= 4; // $number = $number ** 4;
  echo $number . "<br>";

  $number .= 4; // $number = $number . 4; // concatenação
  echo $number . "<br>";

  // Texto
  $text = 'Esse é um texto';
  echo $text . "<br>";

  $text = $text . ' qualquer';
  echo $text . "<br>";

  $text .= ' de verdade!';
  echo $text . "<br>";

  // Variável Inexistente
  // $unexistentVar = 'valor existente';
  echo $unexistentVar . "<br>";
  $value = $unexistentVar ?? 'valor default';
  echo $value . "<br>";