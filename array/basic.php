<div class="title">Array</div>

<?php
  $list = array(1, 2, 3.4, "Texto");
  echo $list . "<br>";

  var_dump($list);
  echo "<br>";

  print_r($list);
  echo "<br>";

  $list[0] = 1234;
  print_r($list);
  echo "<br>";

  echo $list[0] . "<br>";
  echo $list[1] . "<br>";
  echo $list[2] . "<br>";
  echo $list[3] . "<br>";

  var_dump($list[4]);
  echo "<br>";

  $text = 'Esse é um texto de teste';
  echo $text[0] . "<br>"; // E
  echo $text[11] . "<br>"; // t, pois a letra é ocupa duas posições do array
  echo mb_substr($text, 10, 1) . "<br>"; // t