<div class="title">Função & Escopo</div>

<?php
  function printMessages() {
    echo "Olá! ";
    echo "Até a próxima!<br>";
  }

  printMessages();
  printMessages();
  printMessages();

  echo "<hr>";

  $var = 1;
  function changeValue() {
    $var = 2;
    echo "Durante a função: $var<br>";
  }

  echo "Antes: $var<br>";
  changeValue();
  echo "Depois: $var<br>";

  echo "<hr>";

  function realChangeValue() {
    global $var;
    $var = 3;
    echo "Durante a função: $var<br>";
  }

  echo "Antes: $var<br>";
  realChangeValue();
  echo "Depois: $var<br>";

  echo "<hr>";

  var_dump(realChangeValue());