<div class="title">PDO: Consultar Registro</div>

<?php
  require_once "connection_pdo.php";
  $connection = newConnection();

  $sql = "SELECT * FROM register";

  // PDO::FETCH_NUM
  // PDO::FETCH_ASSOC
  // PDO::FETCH_CLASS
  // PDO::FETCH_BOTH
  $result = $connection
    ->query($sql)
    ->fetchAll(PDO::FETCH_ASSOC);

  print_r($result);

  echo "<hr>";

  $sql = "SELECT * FROM register LIMIT :limiter OFFSET :offset";

  $stmt = $connection->prepare($sql);
  $stmt->bindValue(":limiter", 2, PDO::PARAM_INT);
  $stmt->bindValue(":offset", 3, PDO::PARAM_INT);

  if($stmt->execute()) {
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($result);
  } else {
    echo "Erro ao consultar registro! ERROR: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
  }

  echo "<hr>";

  $sql = "SELECT * FROM register WHERE id = ?";
  $stmt = $connection->prepare($sql);

  if($stmt->execute([1])) {
    $result = $stmt->fetch();
    print_r($result);
  } else {
    echo "Erro ao consultar registro! ERROR: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
  }

  echo "<hr>";

  $sql = "SELECT * FROM register WHERE id = :id";
  $stmt = $connection->prepare($sql);
  $stmt->bindValue(":id", 2, PDO::PARAM_INT);

  if($stmt->execute()) {
    $result = $stmt->fetch();
    print_r($result);
  } else {
    echo "Erro ao consultar registro! ERROR: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
  }

  echo "<hr>";

  $sql = "SELECT * FROM register WHERE id = :id";
  $stmt = $connection->prepare($sql);

  if($stmt->execute([":id" => 3])) {
    $result = $stmt->fetch();
    print_r($result);
  } else {
    echo "Erro ao consultar registro! ERROR: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
  }

  // print_r(get_class_methods($connection));

  $connection->close();