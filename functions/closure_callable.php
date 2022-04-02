<div class="title">Closure & Callable</div>

<!-- 
  - Funções anônimas e funções são callables
  - Funções anônimas são closures
 -->

<?php
  $sum = function ($a, $b) {
    return $a + $b;
  };

  echo $sum(1, 2), '<br>';
  echo is_callable($sum) ? 'Sim' : 'Não', '<br>';


  $sum = 1;
  echo is_callable($sum) ? 'Sim' : 'Não', '<br>';

  var_dump($sum);
  echo '<br>';

  $sum2 = function ($a, $b) {
    return $a + $b;
  };

  function execute($a, $b, $op, callable $function) {
    $result = $function($a, $b) ?? 'Não foi possível executar a operação';

    echo "$a $op $b = $result<br>";
  }

  execute(2, 3, '+', $sum2);

  function execute2($a, $b, $op, closure $function) {
    $result = $function($a, $b) ?? 'Não foi possível executar a operação';

    echo "$a $op $b = $result<br>";
  }

  execute2(3, 5, '+', $sum2);