<div class="title">Tipo Booleano</div>

<?php
  echo true;
  echo '<br>';
  echo false;

  echo '<br>';

  echo var_dump(true);
  echo '<br>';
  echo var_dump(false);
  echo '<br>';
  echo var_dump('false');
  echo '<br>';
  echo is_bool(false);
  echo is_bool('true');

  // fazer as regras de conversão
  echo '<p>Regras: </p>';
  echo var_dump((bool) 0) . '<br>'; // apenas zero é false dos interiros
  echo var_dump((bool) 20) . '<br>';
  echo var_dump((bool) -1) . '<br>';
  echo var_dump((bool) 0.0) . '<br>';
  echo var_dump((bool) 0.0000000001) . '<br>';
  echo var_dump((bool) "") . '<br>'; // false
  echo var_dump((bool) "0") . '<br>'; // false
  echo var_dump((bool) " ") . '<br>'; // todas as outras strings são verdadeiras
  echo var_dump((bool) "00") . '<br>';
  echo var_dump((bool) "false") . '<br>';

  echo var_dump(!!"false") . '<br>';