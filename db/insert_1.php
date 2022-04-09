<div class="title">Inserir Registro #01</div>

<?php
  require_once "connection.php";

  $sql = "INSERT INTO register
    (name, birthdate, email, site, children, salary)
    VALUES (
      'Diane Fonseca',
      '1988-07-12',
      'daianelopes233243@gmail.com',
      'http://daylookwear.com.br',
      1,
      1600.70
    )";

  $connection = newConnection();
  $result = $connection->query($sql);

  if($result) {
    echo 'Registro inserido com sucesso!';
  } else {
    echo 'Erro ao inserir registro: ' . $connection->error;
  }

  $connection->close();