<div class="title">Gerenciar Sessão</div>

<?php
  session_start();
  echo session_id() . '<br>';

  $count = &$_SESSION['count'];
  $count = $count ? $count + 1 : 1;

  echo $_SESSION['count'] . '<br>';

  if($_SESSION['count'] % 5 === 0) {
    session_regenerate_id();
  }

  if($_SESSION['count'] >= 15) {
    session_destroy();
  }