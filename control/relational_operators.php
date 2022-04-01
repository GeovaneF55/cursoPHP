<div class="title">Operadores Ralacionais</div>

<?php
  var_dump(1 == 1); // true
  echo('<br>');
  var_dump(1 > 1); // false
  echo('<br>');
  var_dump(1 >= 1); // true
  echo('<br>');
  var_dump(1 < 1); // false
  echo('<br>');
  var_dump(1 <= 1); // true
  echo('<br>');
  var_dump(1 <> 1); // false
  echo('<br>');
  var_dump(1 != 1); // false
  echo('<br>');

  var_dump(1 == '1'); // true
  echo('<br>');
  var_dump(1 === '1'); // false
  echo('<br>');
  var_dump(1 != '1'); // false
  echo('<br>');
  var_dump(1 !== '1'); // true
  echo('<br>');

  echo "<p class='divide'>relacionais no If/Else</p><hr>";
  $age = 15;

  if($age < 18) {
    echo "Menor de idade: $age anos<br>";
  } elseif($age <= 65) {
    echo "Adulto: $age anos";
  } else {
    echo "Idoso: $age anos";
  }

  echo "<p class='divide'>Spacechip</p><hr>";
  var_dump(5 <=> 3); // 1
  echo('<br>');
  var_dump(5 <=> 5); // 0
  echo('<br>');
  var_dump(3 <=> 5); // -1

  echo "<p class='divide'>Valores pode ser V ou F</p><hr>";
  var_dump(!!5); // true
  echo('<br>');
  var_dump(!!0); // false
  echo('<br>');
  var_dump(!!""); // false
  echo('<br>');
  var_dump(!!" "); // true