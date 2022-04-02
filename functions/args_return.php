<div class="title">Argumentos & Retorno</div>

<?php
  function getMessage() {
    return "Seja bem vindo(a)!";
  }

  getMessage();
  $m = getMessage();

  echo $m, "<br>";
  echo getMessage(), "<br>";

  var_dump(getMessage());
  echo "<br>";

  function getMessageWithName($name) {
    return "Seja bem vindo(a) {$name}!";
  }

  echo getMessageWithName('Wagner'), "<br>";
  echo getMessageWithName('Tiago'), "<br>";

  function sum($a, $b) {
    return $a + $b;
  }

  echo sum(4, 5), "<br>";
  echo sum(45, 78), "<br>";

  $x = 7;
  $y = 13;
  echo sum($x, $y), "<br>";

  function changeValue($a, $newValue) {
    $a = $newValue;
  }

  $var = 1;
  changeValue($var, 3);
  echo  $var, "<br>";

  function realChangeValue(&$a, $newValue) {
    $a = $newValue;
  }

  $var = 1;
  realChangeValue($var, 5);
  echo  $var, "<br>";