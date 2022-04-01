<div class="title">Operador Ternário</div>

<?php
  $age = 30;
  $status;

  if($age >= 18) {
    $status = 'Maior de idade';
  } else {
    $status = 'Menor de idade';
  }

  echo "$status<br>";

  $age = 17;
  $status = ($age >= 18) ? 'Maior de idade' : 'Menor de idade';

  echo "$status<br>";

  $age = 70;
  $status = ($age >= 18) ? (($age >= 65) ? 'Aposentado' : 'Maior de idade') : 'Menor de idade';
  echo "$status<br>";