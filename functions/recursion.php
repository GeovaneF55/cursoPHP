<div class="title">Recursividade</div>

<?php
  function sumOneUntil1($number) {
    $sum = 0;
    
    for(; $number > 0; $number--) {
      $sum += $number;
    }

    return $sum;
  }

  echo sumOneUntil1(5), '<br>';

  function sumOneUntil2($number) {
    $sum = 0;
    
    for($i = 1; $i <= $number; $i++) {
      $sum += $i;
    }

    return $sum;
  }

  echo sumOneUntil2(6), '<br>';

  function sumOneUntilRecursion($number) {
    // Condição de parada
    if($number === 1) {
      return 1;
    }

    return $number + sumOneUntilRecursion($number - 1);
  }

  echo sumOneUntilRecursion(7), '<br>';

  function sumOneUntilRecursionEconomic($number) {
    return ($number === 1) ? 1 : $number + sumOneUntilRecursionEconomic($number - 1);
  }

  echo sumOneUntilRecursionEconomic(8), '<br>';