<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<div class="title">Formulário</div>

<h2>Cadastro</h2>

<?php 
  if(count($_POST) > 0) {
    $erros = [];

    if(!filter_input(INPUT_POST, "name")) {
      $erros['name'] = "Nome é obrigatório!";
    }

    if(filter_input(INPUT_POST, "birth")) {
      $data = DateTime::createFromFormat('d/m/Y', $_POST['birth']);

      if (!$data) {
        $erros['birth'] = "Data deve estar no padrão dd/mm/aaaa!";
      }
    }

    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $erros['email'] = "Email inválido!";
    }

    if(!filter_var($_POST['site'], FILTER_VALIDATE_URL)) {
      $erros['site'] = "Site inválido!";
    }

    $childrenConfig = [
      'options' => [
        'min_range' => 0,
        'max_range' => 20
      ]
    ];

    if(!filter_var($_POST['children'], FILTER_VALIDATE_INT, $childrenConfig) &&
      $_POST['children'] != 0) {
        $erros['children'] = "Quantidade de filhos inválida! (0-20)";
    }

    $salaryConfig = [
      'options' => [
        'decimal' => ','
      ]
    ];

    if(!filter_var($_POST['salary'], FILTER_VALIDATE_FLOAT, $salaryConfig)) {
      $erros['salary'] = "Salário inválido!";
    }
  }
?>

<?php foreach($erros as $erro): ?>
  <div class="alert alert-danger" role="alert">
    <?= $erro ?>
  </div>
<?php endforeach; ?>

<form action="#" method="post">
  <div class="form-row">
    <div class="form-group col-md-9">
      <label for="name">Nome</label>
      <input type="text" name="name" id="name"
        class="form-control <?= $erros['name'] ? 'is-invalid' : '' ?>"
        placeholder="Nome" value="<?= $_POST['name'] ?>">
        <div class="invalid-feedback">
          <?= $erros['name'] ?>
        </div>
    </div>
    <div class="form-group col-md-3">
      <label for="birth">Nascimento</label>
      <input type="text" name="birth" id="birth"
        class="form-control <?= $erros['birth'] ? 'is-invalid' : '' ?>"
        placeholder="Nascimento" value="<?= $_POST['birth'] ?>">
      <div class="invalid-feedback">
        <?= $erros['birth'] ?>
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email">E-mail</label>
      <input type="text" name="email" id="email"
        class="form-control <?= $erros['email'] ? 'is-invalid' : '' ?>"
        placeholder="E-mail" value="<?= $_POST['email'] ?>">
      <div class="invalid-feedback">
        <?= $erros['email'] ?>
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="site">Site</label>
      <input type="text" name="site" id="site"
        class="form-control <?= $erros['site'] ? 'is-invalid' : '' ?>"
        placeholder="Site" value="<?= $_POST['site'] ?>">
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
        placeholder="Qtde de Filhos" value="<?= $_POST['children'] ?>">
      <div class="invalid-feedback">
        <?= $erros['children'] ?>
      </div>
    </div>
    <div class="form-group col-md-6">
      <label for="salary">Salário</label>
      <input type="text" name="salary" id="salary"
        class="form-control <?= $erros['salary'] ? 'is-invalid' : '' ?>"
        placeholder="Salário" value="<?= $_POST['salary'] ?>">
      <div class="invalid-feedback">
        <?= $erros['salary'] ?>
      </div>
    </div>
  </div>
  <button class="btn btn-primary btn-lg">
    Enviar
  </button>
</form>