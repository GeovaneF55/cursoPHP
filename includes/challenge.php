<div class="title">Desafio do Módulo</div>

<?php
  ini_set('display_errors', 1);

  require_once('user.php');
  
  $user = new User("João", 20, "joao");
  $user->present();

  unset($user);