<div class="title">Laço For</div>

<?php
  for($count = 1; $count <= 5; $count++) {
    echo "O valor de count é: $count <br>";
  }

  echo "<hr>";

  for(; $count <= 10; $count++) {
    echo "O valor de count é: $count <br>";
  }

  echo "<hr>";

  for(; $count <= 15;) {
    echo "O valor de count é: $count <br>";
    $count++;
  }

  echo "<hr>";

  $week = array(1 => "Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado");

  print_r($week);
  echo "<br>";

  for($i = 1; $i <= count($week); $i++) {
    echo "{$week[$i]} <br>";
  }

  echo "<hr>";

  $matrix = [
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
  ];

  for($i = 0; $i < count($matrix); $i++) {
    for($j = 0; $j < count($matrix[$i]); $j++) {
      echo "{$matrix[$i][$j]} ";
    }
    echo "<br>";
  }