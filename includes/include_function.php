<div class="title">Include Função</div>

<?php
  echo 'Carregando: include_function.php<br>';

  function loadArchive() {
    include('include_archive.php');

    echo "$variable <br>";
    echo sum(2, 5), '<br>';
  }

  echo 'Novamente include_function.php<br>';
  // echo sum(8, 1) . '<br>';
  loadArchive();

  echo "$variable <br>";

  var_dump($variable);
  echo '<br>';

  echo sum(10, 1) . '<br>';