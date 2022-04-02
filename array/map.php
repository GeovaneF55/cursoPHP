<div class="title">Mapa</div>

<?php
  $data = array(
    "age" => 25,
    "color" => "green",
    "weight" => 49.8
  );

  print_r($data);
  echo "<br>";

  var_dump($data[0]);
  echo "<br>";

  echo $data["age"] . "<br>";
  echo $data["color"] . "<br>";
  echo $data["weight"] . "<br>";

  var_dump($data["other_info"]);
  echo "<br>";

  $list = array(
    "a",
    "cinco" => "b",
    "c",
    8 => "d",
    "e",
    6 => "f",
    "g",
    8 => "h",
  );

  print_r($list);
  echo "<br>";

  $list[] = 'i';
  print_r($list);
  echo "<br>";

  $list['vinte'] = 'j';
  print_r($list);
  echo "<br>";

  $list[false] = 'Tentei indexar com false!';
  print_r($list);
  echo "<br>";

  $list[true] = 'Tentei indexar com true!';
  print_r($list);
  echo "<br>";