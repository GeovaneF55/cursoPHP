<div class="title">Desafio Index</div>

<?php
  $list = array(
    1,
    4 => 2,
    3 => 3,
    'a' => 4,
    5,
    '9' => 6,
    '06' => 7,
    0 => 8
  );

  // Array([0] => 8, [3] => 3, [4] => 2, ['a'] => 4, [5] => 5, ['9'] => 6, ['06'] => 7)
  print_r($list);