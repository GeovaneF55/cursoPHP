<div class="title">Download de Arquivos</div>

<?php
  session_start();

  $files = $_SESSION['files'] ?? [];
  $dirPath = getcwd();

  $uploadDir = "$dirPath/assets/files/";
  $fileName = $_FILES['file']['name'];

  $file = $uploadDir . $fileName;

  $tmpFile = $_FILES['file']['tmp_name'];

  ini_set('display_errors', 1);

  if(move_uploaded_file($tmpFile, $file)) {
    echo "<br>Arquivo enviado com sucesso!";

    $files[] = $fileName;
    $_SESSION['files'] = $files;
  } else {
    echo "<br>Erro ao enviar arquivo!";
  }
?>

<form action="#" method="post"
  enctype="multipart/form-data">
  <input type="file" name="file">
  <button>Enviar</button>
</form>

<ul>
  <?php foreach($files as $file): ?>
    <li>
      <a href="assets/files/<?= $file ?>"><?= $file ?></a>
    </li>
  <?php endforeach; ?>
</ul>

<style>
  input, button {
    font-size: 1.2rem;

  }
</style>