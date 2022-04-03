<div class="title">Map & Filter</div>

<?php
  $grades = [5.8, 7.3, 9.8, 6.7];
  $finalGrades1 = [];

  foreach($grades as $grade) {
    $finalGrades1[] = round($grade);
  }

  print_r($finalGrades1);
  echo '<br>';

  $finalGrades2 = array_map('round', $grades);

  print_r($finalGrades2);
  echo '<br>';

  function greatRound($grade) {
    $rounded = round($grade) + 1;
    return $rounded > 10 ? 10 : $rounded;
  }

  $finalGrades3 = array_map('greatRound', $grades);

  print_r($finalGrades3);
  echo '<br>';

  echo '<hr>';

  $onlyApproveds1 = [];

  foreach($grades as $grade) {
    if($grade >= 7) {
      $onlyApproveds1[] = $grade;
    }
  }

  print_r($onlyApproveds1);
  echo '<br>';

  function approveds($grade) {
    return $grade >= 7;
  }

  $onlyApproveds2 = array_filter($grades, 'approveds');

  print_r($onlyApproveds2);
  echo '<br>';