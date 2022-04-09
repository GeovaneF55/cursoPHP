<div class="title">Upload de Arquivos</div>

<?php
  print_r($_FILES);
  echo '<br>';

  print_r($_POST);
  echo '<br>';

  print_r($_GET);
  echo '<br>';

  if($_FILES && $_FILES['file']) {
    $dirPath = getcwd();
    $uploadDir = "$dirPath/assets/uploads/";

    $fileName = $_FILES['file']['name'];
    $file = $uploadDir . $fileName;

    $tmpFile = $_FILES['file']['tmp_name'];

    ini_set('display_errors', 1);

    if(move_uploaded_file($tmpFile, $file)) {
      echo "<br>Arquivo enviado com sucesso!";
    } else {
      echo "<br>Erro ao enviar arquivo!";
    }
  }
?>

<form action="#" method="post"
  enctype="multipart/form-data">
  <input type="file" name="file">
  <button>Enviar</button>
</form>

<style>
  input, button {
    font-size: 1.2rem;

  }
</style>