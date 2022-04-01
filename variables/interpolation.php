<div class="title">Interpolação</div>

<?php
  $number = 10;
  echo '$number <br>';
  echo "$number <br>";

  $text = "A sua nota é: $number";
  echo "$text <br>";

  $object = 'caneta';
  echo "Eu tenho 5 $object s <br>";
  echo "Eu tenho 5 {$object}s <br>";
  echo "Eu tenho 5 { $object}s  mas perdi 3 {$object }s<br>";