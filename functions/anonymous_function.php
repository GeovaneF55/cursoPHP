<div class="title">Funções Anônimas</div>

<?php
  $sum = function ($a, $b) {
    return $a + $b;
  };

  echo $sum(1, 2), '<br>';

  function execute($a, $b, $op, $function) {
    $result = $function($a, $b) ?? 'Não foi possível executar a operação';

    echo "$a $op $b = $result<br>";
  }

  execute(2, 3, '+', $sum);

  $mult = function ($a, $b) {
    return $a * $b;
  };

  execute(2, 3, '*', $mult);

  $div = function ($a, $b) {
    return $a / $b;
  };

  execute(6, 2, '/', $div);