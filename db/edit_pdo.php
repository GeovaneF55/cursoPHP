<div class="title">PDO: Alterar Registro</div>

<?php
  require_once "connection_pdo.php";
  $connection = newConnection();

  $sql = "UPDATE register
  SET name = ?, birthdate = ?, email = ?,
  site = ?, children = ?, salary = ?
  WHERE id = ?";

  $stmt = $connection->prepare($sql);
  $result = $stmt->execute([
    "Aurora Fonseca",
    "2023-12-19",
    "auroraf55@gmail.com",
    "http://www.auroraf55.com",
    0,
    4000,
    4
  ]);

  if($result) {
    echo "Registro alterado com sucesso!";
  } else {
    echo "Erro ao alterar registro! ERROR: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
  }

  // print_r(get_class_methods($connection));

  $connection->close();