<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="title">Alterar Registro</div>

<?php
  require_once "connection.php";
  $connection = newConnection();
  $erros = [];

  if(isset($_GET['code'])) {
    $sql = "SELECT * FROM register WHERE id = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param('i', $_GET['code']);

    if($stmt->execute()) {
      $result = $stmt->get_result();
      if($result->num_rows > 0) {
        $data = $result->fetch_assoc();

        if($data['birthdate']) {
          $date = new DateTime($data['birthdate']);
          $data['birthdate'] = $date->format('d/m/Y');
        }

        if($data['salary']) {
          $data['salary'] = str_replace(".", ",", $data['salary']);
        }
      }
    }
  }

  if(count($_POST) > 0) {
    $data = $_POST;

    if(trim($data['name']) === "") {
      $erros['name'] = "Nome é obrigatório!";
    }

    if(isset($data['birthdate'])) {
      $date = DateTime::createFromFormat('d/m/Y', $data['birthdate']);

      if (!$date) {
        $erros['birthdate'] = "Data deve estar no padrão dd/mm/aaaa!";
      }
    }

    if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
      $erros['email'] = "Email inválido!";
    }

    if(!filter_var($data['site'], FILTER_VALIDATE_URL)) {
      $erros['site'] = "Site inválido!";
    }

    $childrenConfig = [
      'options' => [
        'min_range' => 0,
        'max_range' => 20
      ]
    ];

    if(!filter_var($data['children'], FILTER_VALIDATE_INT, $childrenConfig) &&
      $data['children'] != 0) {
        $erros['children'] = "Quantidade de filhos inválida! (0-20)";
    }

    $salaryConfig = [
      'options' => [
        'decimal' => ','
      ]
    ];

    if(!filter_var($data['salary'], FILTER_VALIDATE_FLOAT, $salaryConfig)) {
      $erros['salary'] = "Salário inválido!";
    }

    if(!count($erros)) {
      $sql = "UPDATE register
      SET name = ?, birthdate = ?, email = ?,
      site = ?, children = ?, salary = ?
      WHERE id = ?";

      $stmt = $connection->prepare($sql);

      $params = [
        $data['name'],
        $date ? $date->format('Y-m-d') : null,
        $data['email'],
        $data['site'],
        $data['children'],
        $data['salary'] ? str_replace(",", ".", $data['salary']) : null,
        $data['id']
      ];

      $stmt->bind_param("ssssidi", ...$params);

      if($stmt->execute()) {
        unset($data);
      }
    }
  }
?>

<?php foreach($erros as $erro): ?>
  <!-- <div class="alert alert-danger" role="alert"> -->
    <?= "" // $erro ?>
  <!-- </div> -->
<?php endforeach; ?>

<form action="exercise.php" method="get">
  <input type="hidden" name="dir" value="db">
  <input type="hidden" name="file" value="edit">
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="number" name="code" id="code"
        class="form-control"
        value="<?= $_GET['code'] ?>"
        placeholder="Informe o Código para consulta">
    </div>
    <div class="col-sm-2">
      <button class="btn btn-success mb-4">
        Consultar
      </button>
    </div>
  </div>
</form>

<form action="#" method="post">
  <input type="hidden" name="id" id="id"
    value="<?= $data['id'] ?>">
  <div class="form-row">
    <div class="form-group col-md-9">
      <label for="name">Nome</label>
      <input type="text" name="name" id="name"
        class="form-control <?= $erros['name'] ? 'is-invalid' : '' ?>"
        placeholder="Nome" value="<?= $data['name'] ?>">
        <div class="invalid-feedback">
          <?= $erros['name'] ?>
        </div>
    </div>
    <div class="form-group col-md-3">
      <label for="birthdate">Nascimento</label>
      <input type="text" name="birthdate" id="birthdate"
        class="form-control <?= $erros['birthdate'] ? 'is-invalid' : '' ?>"
        placeholder="Nascimento" value="<?= $data['birthdate'] ?>">
      <div class="invalid-feedback">
        <?= $erros['birthdate'] ?>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">E-mail</label>
      <input type="text" name="email" id="email"
        class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>"
        placeholder="E-mail" value="<?= $data['email'] ?>">
      <div class="invalid-feedback">
        <?= $erros['email'] ?>
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="site">Site</label>
      <input type="text" name="site" id="site"
        class="form-control <?= $erros['site'] ? 'is-invalid' : '' ?>"
        placeholder="Site" value="<?= $data['site'] ?>">
      <div class="invalid-feedback">
        <?= $erros['site'] ?>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="children">Qtde de Filhos</label>
      <input type="number" name="children" id="children"
        class="form-control <?= $erros['children'] ? 'is-invalid' : '' ?>"
        placeholder="Qtde de Filhos" value="<?= $data['children'] ?>">
      <div class="invalid-feedback">
        <?= $erros['children'] ?>
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="salary">Salário</label>
      <input type="text" name="salary" id="salary"
        class="form-control <?= $erros['salary'] ? 'is-invalid' : '' ?>"
        placeholder="Salário" value="<?= $data['salary'] ?>">
      <div class="invalid-feedback">
        <?= $erros['salary'] ?>
      </div>
    </div>
  </div>
  <button class="btn btn-primary btn-lg">
    Enviar
  </button>
</form>