<div class="title">Criar Tabela</div>

<?php
  require_once "connection.php";

  $sql = "CREATE TABLE IF NOT EXISTS register (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    birthdate DATE,
    email VARCHAR(100) NOT NULL,
    site VARCHAR(100),
    children INT,
    salary FLOAT
  )";

  $connection = newConnection();
  $result = $connection->query($sql);

  if($result) {
    echo 'Tabela criada com sucesso!';
  } else {
    echo 'Erro ao criar tabela: ' . $connection->error;
  }

  $connection->close();