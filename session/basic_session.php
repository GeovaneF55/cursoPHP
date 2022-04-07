<div class="title">Sessão</div>

<?php
  session_start();

  print_r($_SESSION);
  echo '<br>';

  if(!$_SESSION['name']) {
    $_SESSION['name'] = 'Gabriel';
  }

  if(!$_SESSION['email']) {
    $_SESSION['email'] = 'gabriel@azmail.com';
  }

  print_r($_SESSION);

  ?>

  <p>
    <a href="/curso-php/session/basic_session_change.php">
      Alterar Sessão
    </a>
  </p>