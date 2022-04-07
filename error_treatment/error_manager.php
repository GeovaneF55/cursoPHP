<div class="title">Gerenciador de Erro</div>

<?php
  ini_set('display_errors', 1);
  echo 4 / 0, '<br>';

  error_reporting(E_ERROR);
  echo 4 / 0, '<br>';

  error_reporting(E_ALL);
  echo 4 / 0, '<br>';

  error_reporting(~E_ALL);
  echo 4 / 0, '<br>';

  echo '<hr>';

  error_reporting(E_ALL);
  echo 4 / 0, '<br>';
  include 'inexistent_file.php';

  function messageFilter($errno, $errstring) {
    $text = 'include';
    // $text = 'by zero';
    return !!stripos(" $errstring", $text);
  }

  set_error_handler('messageFilter', E_WARNING);

  echo '<hr>';

  echo 4 / 0, '<br>';
  include 'inexistent_file.php';

  echo '<hr>';

  restore_error_handler();

  echo 4 / 0, '<br>';
  include 'inexistent_file.php';