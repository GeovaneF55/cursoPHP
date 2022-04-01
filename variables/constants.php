<div class="title">Constantes</div>

<?php
  define('TAXA_DE_JUROS', 5.9);
  echo TAXA_DE_JUROS, "<br>";
  echo $TAXA_DE_JUROS, "! <br>";
  // TAXA_DE_JUROS = 2.5
  
  const NOVA_TAXA_DE_JUROS = 2.5;
  echo NOVA_TAXA_DE_JUROS, "<br>";

  $valorVariavel = 2.8;
  // define(NOVISSIMA_TAXA_DE_JUROS, $valorVariavel);
  // const NOVISSIMA_TAXA_DE_JUROS = $valorVariavel;
  const NOVISSIMA_TAXA_DE_JUROS = 2.8 + 1.2;
  echo NOVISSIMA_TAXA_DE_JUROS, "<br>";

  echo PHP_VERSION, "<br>";

  echo PHP_INT_MAX, "<br>";
  echo PHP_INT_MIN, "<br>";

  echo PHP_FLOAT_MAX, "<br>";
  echo PHP_FLOAT_MIN, "<br>";

  echo "Linha: " . __LINE__ . "<br>";
  echo __FILE__ . "<br>";
  echo __DIR__ . "<br>";