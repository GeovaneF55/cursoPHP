<div class="title">Include vs Require</div>

<?php
  echo "Usando include com arquivo inexistente...<br>";
  ini_set('display_errors', 1);

  include('inexistente.php');

  echo "Usando require com arquivo inexistente...<br>";
  require('inexistente.php');

  echo "Não achou mesmo. <br>";