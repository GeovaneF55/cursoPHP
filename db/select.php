<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="title">Consultar Registro</div>

<?php
  require_once "connection.php";

  $sql = "SELECT id, name, birthdate, email FROM register";

  $connection = newConnection();
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
    <th>Nome</th>
    <th>Nascimento</th>
    <th>E-mail</th>
  </thead>
  <tbody>
    <?php foreach($registers as $register): ?>
      <tr>
        <td><?= $register['name'] ?></td>
        <td>
          <?=
            date('d/m/Y', strtotime($register['birthdate']))
          ?>
        </td>
        <td><?= $register['email'] ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<style>
  table > * {
    font-size: 1.2rem;
  }
</style>