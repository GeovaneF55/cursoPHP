<div class="title">While/Do While</div>

<?php
  const LIMIT_VALUE = 5;

  echo "<p class='divide'>WHILE</p><hr>";

  $count = 0;
  while($count < LIMIT_VALUE) {
    echo "while $count <br>";
    $count++;
  }

  echo "<p class='divide'>DO WHILE</p><hr>";

  $count = 0;
  do {
    echo "do-while $count <br>";
    $count++;
  } while($count < LIMIT_VALUE);

  echo "<p class='divide'>WHILE(true)</p><hr>";
  
  $count = 0;
  while(true) {
    echo "while(true) $count <br>";
    $count++;
    if($count >= LIMIT_VALUE) break;
  }