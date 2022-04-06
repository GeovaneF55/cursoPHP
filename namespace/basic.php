<?php namespace context; ?>

<div class="title">Exemplo Básico</div>

<?php
  echo __NAMESPACE__ . '<br>';
  const constant1 = 123;
  define('context\constant2', 234);
  define('constant2', 1234);
  define(__NAMESPACE__ . '\constant3', 345);
  define('other_context\constant4', 456);

  echo constant1 . '<br>';
  echo constant2 . '<br>';
  echo \constant2 . '<br>';
  // echo context\constant3 . '<br>';
  echo constant('\context\constants3') . '<br>';
  echo constant(__NAMESPACE__ . '\constant3') . '<br>';
  // echo constant4 . '<br>';
  echo \other_context\constant4 . '<br>';

  function sum($a, $b) {
    return $a + $b;
  }

  echo \context\sum(3, 8) . '<br>';
  // echo \sum(4, 9) . '<br>';
  echo \context\sum(5, 9) . '<br>';

  function strpos($str, $text) {
    echo "Buscando o texto {$text} em {$str}<br>";
    return 1;
  }

  echo strpos('Texto genérico para busca', 'busca') . '<br>';
  echo \strpos('Texto genérico para busca', 'busca') . '<br>';