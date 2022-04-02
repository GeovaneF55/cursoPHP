<div class="title">Operações</div>

<?php
  $data1 = [
    "name" => "Jose",
    "age" => 28,
  ];

  $data2 = [
    "city" => "Fortaleza"
  ];

  $data2["address"] = "Rua dos bobos";

  $completedData = $data1 + $data2;
  
  print_r($completedData);
  echo "<br>";

  echo is_array($completedData), "<br>";
  echo count($completedData), "<br>";

  $index = array_rand($completedData);
  echo "$index = $completedData[$index] <br>";
  echo "{$completedData['age']} <br>";
  echo "${completedData['age']} <br>";

  unset($completedData['name']);

  print_r($completedData);
  echo "<br>";

  unset($completedData);

  var_dump($completedData);
  echo "<br>";

  $odd = [1, 3, 5, 7, 9];
  $even = [0, 2, 4, 6, 8];

  $decimals = $even + $odd;
  print_r($decimals);
  echo "<br>";

  $decimals = array_merge($even, $odd);
  print_r($decimals);
  echo "<br>";

  sort($decimals);
  print_r($decimals);
  echo "<br>";
