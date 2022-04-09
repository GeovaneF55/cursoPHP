<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="title">Excluir Registro #02</div>

<?php
  require_once "connection.php";

  $connection = newConnection();

  if($_GET['delete']) {
    $deleteSql = "DELETE FROM register WHERE id = ?";
    $stmt = $connection->prepare($deleteSql);
    $stmt->bind_param('i', $_GET['delete']);
    $stmt->execute();
  }

  $sql = "SELECT id, name, email, birthdate FROM register";
  $result = $connection->query($sql);

  $registers = [];

  if($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $registers[] = $row;
    }
  } elseif($connection->error) {
    echo 'Erro ao consultar registro: ' . $connection->error;
  }

  $connection->close();
?>

<table class="table table-hover table-striped table-bordered">
  <thead>
    <th>ID</th>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Nascimento</th>
    <th>Ações</th>
  </thead>
  <tbody>
    <?php foreach($registers as $register): ?>
      <tr>
        <td><?= $register['id'] ?></td>
        <td><?= $register['name'] ?></td>
        <td><?= $register['email'] ?></td>
        <td>
          <?=
            date('d/m/Y', strtotime($register['birthdate']))
          ?>
        </td>
        <td>
          <a href="exercise.php?dir=db&file=delete_2&delete=<?= $register['id'] ?>" class="btn btn-danger">
            Excluir
          </a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<style>
  table > * {
    font-size: 1.2rem;
  }
</style>