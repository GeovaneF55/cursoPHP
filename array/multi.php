<div class="title">Multidimensionais</div>

<?php
  $data = [
    [
      "name" => "Roberto",
      "age" => 26,
      "city" => "São Paulo"
    ], [
      "name" => "Maria",
      "age" => 25,
      "city" => "Bahia"
    ]
  ];

  print_r($data);
  echo "<br>";

  echo $data[0]["age"], "<br>";
  echo $data[1]["age"], "<br>";

  $data[] = [
    "name" => "Florinda",
    "age" => 30,
    "city" => "Cidade do México"
  ];

  print_r($data);
  echo "<br>";

  echo $data[2]["age"], "<br>";

  $data[2]['neighborhood'] = "Chaves";

  print_r($data);
  echo "<br>";

  unset($data[1]);

  print_r($data);
  echo "<br>";

  var_dump($data[1]);
  echo "<br>";