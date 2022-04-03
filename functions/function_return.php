<div class="title">Retornando Função</div>

<?php
  function sum($a) {
    // Algorítmo (30s)
    return function($b) use ($a) {
      return $a + $b; // 3s
    };
  }

  echo sum(3)(3), '<br>';

  $twoPlus = sum(2);

  echo $twoPlus(10) . '<br>';
  echo $twoPlus(18) . '<br>';