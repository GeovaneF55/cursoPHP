<div class="title">Variáveis Variáveis</div>

<?php
  $a = 'valorA';
  $$a = 'valorAA';

  echo "$a {$$a} ${$a} $valorA <br>";

  $epa = 'opa';
  $opa = 'vish';
  $vish = 'eita!!!!';
  echo "$epa $opa {$$epa} $vish {$$opa} {$$$epa} <br>";