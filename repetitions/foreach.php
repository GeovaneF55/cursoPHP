<div class="title">Foreach</div>

<?php
  $week = array(
    1 => 'Domingo',
    'Segunda',
    'Terça',
    'Quarta',
    'Quinta',
    'Sexta',
    'Sábado'
  );

  foreach($week as $day) {
    echo "$day <br>";
  }

  echo "<hr>";

  foreach($week as $key => $day) {
    echo "$key => $day <br>";
  }

  echo "<hr>";

  $matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
  ];

  foreach($matrix as $row) {
    foreach($row as $letter) {
      echo "$letter ";
    }
    echo "<br>";
  }

  echo "<hr>";

  $numbers = [1, 2, 3, 4, 5];

  foreach($numbers as $double) {
    $double *= 2;
    echo "$double <br>";
  }

  print_r($numbers);

  $numbers = [1, 2, 3, 4, 5];

  foreach($numbers as &$double) {
    $double *= 2;
    echo "$double <br>";
  }

  print_r($numbers);

  echo "<hr>";