<div class="title">Desafio PI</div>

<?php
  echo pi();
  $pi = 3.14;

  var_dump($pi);
  echo "<br>";
  var_dump(pi());
  echo "<br>";

  if($pi == pi()) {
    echo "Iguais! <br>";
  } else {
    echo "diferentes! <br>";
  }

  // Operador Relacional
  $wrongPi = 2.8;

  // Resposta
  echo ($pi - pi()) . "<br>";
  echo ($pi - $wrongPi) . "<br>";

  if($pi - pi() <= 0.01) {
    echo "Praticamente Iguais! <br>";
  } else {
    echo "Valor Errado! <br>";
  }