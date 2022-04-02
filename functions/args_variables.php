<div class="title">Argumentos Variáveis</div>

<?php
  function sum($a, $b) {
    return $a + $b;
  }

  echo sum(14, 15), "<br>";
  echo sum(6, 5, 4), "<br>";

  function completeSum(...$numbers) {
    $sum = 0;

    foreach($numbers as $number) {
      $sum += $number;
    }

    return $sum;
  }

  echo completeSum(1, 2, 3, 4, 5), "<br>";

  $array = [6, 7, 8, 9, 10];
  // echo completeSum($array), "<br>"; // Erro!
  echo completeSum(...$array), "<br>";

  function members($holder, ...$dependants) {
    echo "Titular {$holder} responsável por: <br>";
    if($dependants) {
      echo "Dependentes: <br>";
      foreach($dependants as $dependent) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;{$dependent} <br>";
      }
    } else {
      echo "&nbsp;&nbsp;&nbsp;&nbsp;Ninguém <br>";
    }
  }

  members('Ana Silva', 'Pedro', 'Rafaela', 'Amanda');
  members('Roberto');