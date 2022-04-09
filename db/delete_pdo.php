<div class="title">PDO: Excluir Registro</div>

<?php
  require_once "connection_pdo.php";
  $connection = newConnection();

  $sql = "DELETE FROM register WHERE id = ?";

  $stmt = $connection->prepare($sql);

  if($stmt->execute([4])) {
    echo "Registro excluído com sucesso!";
  } else {
    echo "Erro ao excluir registro! ERROR: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
  }

  // print_r(get_class_methods($connection));

  $connection->close();