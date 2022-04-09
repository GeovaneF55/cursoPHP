<div class="title">Excluir Registro #01</div>

<?php
  require_once "connection.php";

  $sql = "DELETE FROM register WHERE id = 3";

  $connection = newConnection();
  $result = $connection->query($sql);

  if($result) {
    echo 'Registro excluído com sucesso!';
  } else {
    echo 'Erro ao excluir registro: ' . $connection->error;
  }

  $connection->close();