<?php
  session_start();
  print_r($_SESSION);
?>

<?php
  $_SESSION['email'] = 'gabrielfilho@emailaz.com.br';
?>

<p>
  <b>Nome: </b> <?php echo $_SESSION['name']; ?>
  <br>
  <b>E-mail: </b> <?php echo $_SESSION['email']; ?>
</p>

<p>
  <a href="/curso-php/session/basic_session.php">
    Voltar
  </a>
</p>
<p>
  <a href="/curso-php/session/basic_session_clear.php">
    Limpar Sessão
  </a>
</p>