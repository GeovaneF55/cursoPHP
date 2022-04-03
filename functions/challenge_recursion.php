<div class="title">Desafio Recursão</div>

<!-- 
  $array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];
  
  > 1
  > 2
  >> 3
  >> 4
  >> 5
  > 6
  >> 7
  >>> 8
  >>> 9
  > 10

 -->

<?php
  $array = [1, 2, [3, 4, 5], 6, [7, [8, 9]], 10];

  function printArray($array, $level = '>') {
    foreach ($array as $key => $element) {
      if (is_array($element)) {
        printArray($element, $level . $level[0]);
      } else {
        echo "$level $element<br>";
      }
    }
  }

  printArray($array);
  printArray($array, '#');