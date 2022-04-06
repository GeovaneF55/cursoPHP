<div class="title">Require & Return</div>

<?php
  $returnedValue = require('used_return.php');
  echo "Valor retornado: $returnedValue <br>";
  echo "Variável: $returnedVariable <br>";

  echo __DIR__, "<br>";

  $returnedValue2 = require(__DIR__ . '/not_used_return.php');
  echo "Valor retornado 2: $returnedValue2 <br>";
  echo "Variável Declarada: $declaredVariable <br>";