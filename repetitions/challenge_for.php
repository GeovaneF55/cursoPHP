<div class="title">Desafio For</div>

<!-- 
  Usar o for ...
  
  #
  ##
  ###
  ####
  #####

  1) Pode usar incremento $i++
  2) Não pode usar incremento $i++
 -->

<?php
  echo "1)<br>";

  $print = '';

  for($i = 1; $i <= 5; $i++) {
    $print .= '#';
    echo $print . "<br>";
  }

  // ou

  // for($i = 1; $i <= 5; $i++) {
  //   echo str_repeat("#", $i) . "<br>";
  // }

  echo "<hr>";

  echo "2)<br>";

  for($print = '#'; $print !== '######'; $print .= '#') {
    echo "$print <br>";
  }