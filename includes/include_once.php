<div class="title">Include Once</div>

<?php
  ini_set('display_errors', 1);

  include('include_once_archive.php');
  // require('include_once_archive.php');

  echo "Variável: '{$variable}' <br>";
  $variable = 'Variável Alterada';
  echo "Variável: '{$variable}' <br>";

  include('include_once_archive.php');
  echo "Variável: '{$variable}' <br>";
  $variable = 'Variável Alterada 2';
  echo "Variável: '{$variable}' <br>";

  include_once('include_once_archive.php');
  echo "Variável: '{$variable}' <br>";

  require_once('include_once_archive.php');
  echo "Variável: '{$variable}' <br>";