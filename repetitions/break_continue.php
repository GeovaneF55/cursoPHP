<div class="title">Break/Continue</div>

<?php
  $count = 16;

  for(;;) {
    echo " $count <br>";
    $count++;

    if($count > 20) {
      break;
    }
  }

  echo "<hr>";

  for(;;) {
    $count++;
    if($count % 2 === 1) {
      continue;
    }

    echo "$count <br>";

    if($count >= 30) {
      break;
    }
  }

  echo "<hr>";

  foreach(array(1, 2, 3, 4, 5, 6) as $number) {
    if($number === 5) break;
    if($number % 2 === 0) continue;

    echo "$number <br>";
  }

  echo "Fim!";