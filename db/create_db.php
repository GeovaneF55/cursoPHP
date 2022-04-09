<div class="title">Criar Banco</div>

<?php
  require_once 'connection.php';

  $connection = newConnection(null);
  $sql = "CREATE DATABASE IF NOT EXISTS course_php";

  $result = $connection->query($sql);

  if($result) {
    echo 'Banco criado com sucesso!';
  } else {
    echo 'Erro ao criar banco: ' . $connection->error;
  }

  $connection->close();