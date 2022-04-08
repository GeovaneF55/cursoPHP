<div class="title">Datas #01</div>

<?php
  echo time() . '<br>';
  echo date('D, d \d\e M \d\e Y H:i A') . '<br>';

  echo strftime('%A, %d de %B de %Y', time()) . '<br>'; // deprecated
  setLocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
  echo strftime('%A, %d de %B de %Y', time()) . '<br>'; // deprecated

  $tomorow = time() + (24 * 60 * 60);

  echo strftime('%A, %d de %B de %Y', $tomorow ) . '<br>'; // deprecated

  $nextWeek = strtotime('+1 week');
  echo strftime('%A, %d de %B de %Y', $nextWeek ) . '<br>'; // deprecated

  $fixedTime = mktime(15, 30, 0, 9, 10, 2020);
  echo strftime('%A, %d de %B de %Y - %H:%M:%S', $fixedTime ) . '<br>'; // deprecated