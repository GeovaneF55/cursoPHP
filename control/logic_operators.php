<div class="title">Operadores Lógicos</div>

<?php
  echo "<p class='divide'>V ou F</p><hr>";

  var_dump(true);
  echo "<br>";

  var_dump(!true); // not
  echo "<br>";

  echo "<p class='divide'>Tabela Verdade 'AND' (E)</p><hr>";
  var_dump(true && true, true and true); // V & V = V
  echo "<br>";
  var_dump(true && false, true and false); // V & F = F
  echo "<br>";
  var_dump(false && true, false and true); // F & V = F
  echo "<br>";
  var_dump(false && false, false and false); // F & F = F
  echo "<br>";

  echo "<p class='divide'>Tabela Verdade 'OR' (OU)</p><hr>";
  var_dump(true || true, true or true); // V | V = V
  echo "<br>";
  var_dump(true || false, true or false); // V | F = V
  echo "<br>";
  var_dump(false || true, false or true); // F | V = V
  echo "<br>";
  var_dump(false || false, false or false); // F | F = F
  echo "<br>";

  echo "<p class='divide'>Tabela Verdade 'XOR' (OU Exclusivo)</p><hr>";
  var_dump(true != true, true xor true); // V xor V = F
  echo "<br>";
  var_dump(true != false, true xor false); // V xor F = V
  echo "<br>";
  var_dump(false != true, false xor true); // F xor V = V
  echo "<br>";
  var_dump(false != false, false xor false); // F xor F = F
  echo "<br>";

  echo "<p class='divide'>Exemplo</p><hr>";
  $age = 62;
  $sex = 'F';

  $paidSocialSecurity = true;

  $womanRetireCritery = ($age >= 60 && $sex === 'F');
  $manRetireCritery = ($age >= 65 && $sex === 'M');
  $reachCritery = ($womanRetireCritery || $manRetireCritery);

  $canRetire = $paidSocialSecurity && $reachCritery;

  echo "Pode se aposentar -> $canRetire <br>";

  if($age >= 60 && $sex === 'F') {
    echo "Pode se aposentar -> $sex <br>";
  } elseif($age >= 65 && $sex === 'M') {
    echo "Pode se aposentar -> $sex <br>";
  } else {
    echo 'Vai ter que trabalhar mais um pouco...';
  }