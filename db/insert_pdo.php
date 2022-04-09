<div class="title">PDO: Inserir Registro</div>

<?php
  require_once "connection_pdo.php";
  $connection = newConnection();

  $sql = "INSERT INTO register
    (name, birthdate, email, site, children, salary)
    VALUES (
      'Jonas Fonseca',
      '2022-05-05',
      'jonasf55@gmail.com',
      'http://jonasf55.github.io',
      0,
      3000.70
    )";

  if($connection->exec($sql)) {
    $id = $connection->lastInsertId();
    echo "Registro inserido com sucesso! ID: $id";
  } else {
    echo "Erro ao inserir registro! ERROR: " . $connection->errorCode() . "<br>";
    print_r($connection->errorInfo());
  }

  // print_r(get_class_methods($connection));

  $connection->close();