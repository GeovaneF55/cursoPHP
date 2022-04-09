<div class="title">Datas #02</div>

<?php
  $dateFormat1 = 'D, d \d\e M \d\e Y H:i A';
  $dateFormat2 = '%A, %d de %B de %Y';
  $dateHourFormat = '%A, %d de %B de %Y - %H:%M:%S';

  $now = new DateTime();

  print_r($now);
  echo '<br>';

  echo $now->format($dateFormat1), '<br>';

  setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
  echo strftime($dateFormat2, $now->getTimestamp()), '<br>';

  $fixedDate = new DateTime('1975-01-25 15:30:50');
  echo strftime($dateFormat2, $fixedDate->getTimestamp()), '<br>';

  $tomorow = new DateTime('+1 day');
  echo strftime($dateFormat2, $tomorow->getTimestamp()), '<br>';

  $tomorow->modify('+1 day');
  echo strftime($dateHourFormat, $tomorow->getTimestamp()), '<br>';

  $tomorow->setDate(2000, 5, 20);
  echo strftime($dateHourFormat, $tomorow->getTimestamp()), '<br>';

  $passedDate = new DateTime('2000-05-17');
  $futureDate = new DateTime('2030-11-26');
  $otherDate = new DateTime('2030-11-26');

  echo ($tomorow > $passedDate ? 'Passou' : 'Ainda não passou'), '<br>';
  echo ($tomorow > $futureDate ? 'Passou' : 'Ainda não passou'), '<br>';
  echo ($otherDate == $futureDate ? 'Igual' : 'Diferente'), '<br>';

  $tz = new DateTimeZone('Europe/Lisbon');
  $now = new DateTime();
  $now->setTimezone($tz);
  echo $now->format('d/M/Y H:i:s'), '<br>';