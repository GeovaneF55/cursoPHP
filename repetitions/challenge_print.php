<div class="title">Desafio Impressão</div>

<!-- 
  Enunciado:
  - Imprima apenas os valores do array que contém o índice par
  - Resolver com for e foreach
  - Valores esperados: AAA, CCC, EEE
 -->

<?php
  $array = [
    'AAA',
    'BBB',
    'CCC',
    'DDD',
    'EEE',
    'FFF'
  ];

  echo "<p class='divide'>FOR</p><hr>";

  for($i = 0; $i < count($array); $i++) {
    if($i % 2 === 1) continue;
    echo "$array[$i] <br>";
  }

  echo "<p class='divide'>FOREACH</p><hr>";

  foreach($array as $key => $value) {
    if($key % 2 !== 0) continue;
    echo "$value <br>";
  }