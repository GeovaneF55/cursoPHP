<div class="title">Comparação Arrays</div>

<?php
  $arr1 = ['name' => 'Maria', 'age' => 20];
  $arr2 = ['name' => 'Maria', 'age' => 20];

  echo "<p class='divide'>Arr1 com Arr2</p><hr>";

  var_dump($arr1 == $arr2);
  echo '<br>';

  var_dump($arr1 === $arr2);
  echo '<br>';

  $arr3 = ['age' => 20, 'name' => 'Maria'];

  echo "<p class='divide'>Arr1 com Arr3</p><hr>";

  var_dump($arr1 == $arr3);
  echo '<br>';

  var_dump($arr1 === $arr3);
  echo '<br>';

  var_dump($arr1 != $arr3);
  echo '<br>';

  var_dump($arr1 !== $arr3);
  echo '<br>';

  $arr4 = ['age' => '20', 'name' => 'Maria'];

  echo "<p class='divide'>Arr1 com Arr4</p><hr>";

  var_dump($arr1 == $arr4);
  echo '<br>';

  var_dump($arr1 === $arr4);
  echo '<br>';
