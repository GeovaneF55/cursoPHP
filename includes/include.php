<div class="title">Include</div>

<?php
  echo 'Carregando: include.php<br>';

  include('include_archive.php');
  
  // Pode mais vezes incluir caso não defina a mesma função múltiplas vezes
  // include('include_archive.php');

  echo sum(3, 8), '<br>';
  echo "O conteúdo da variável é $variable. <br>";