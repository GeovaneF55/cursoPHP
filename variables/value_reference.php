<div class="title">Valor vs Referência</div>

<?php
  $variable = "valor inicial";
  echo $variable, "<br>";

  // Atribuição por valor
  $valueVariable = $variable;
  echo $valueVariable, "<br>";

  $valueVariable = 'novo valor';
  echo "$valueVariable <br>";

  echo "$variable != $valueVariable <br>";

  // Atribuição por referência
  $referenceVariable = &$variable;
  echo $referenceVariable, "<br>";

  $referenceVariable = 'mesma referência';
  echo "$referenceVariable <br>";

  echo "$variable == $referenceVariable <br>";