<?php
  session_start();

  $email = $_POST['email'];
  $password = $_POST['password'];

  if($_POST['email']) {
    $usuarios = [
      ['name' => 'Geovane Fonseca', 'email' => 'geovanefss@gmail.com', 'password' => '123456'],
      ['name' => 'Aluno Cod3r', 'email' => 'aluno@cod3r.com.br', 'password' => '123456']
    ];

    foreach($usuarios as $usuario) {
      $validEmail = $usuario['email'] == $email;
      $validPassword = $usuario['password'] == $password;
      if($validEmail && $validPassword) {
        $_SESSION['errors'] = null;
        $_SESSION['user'] = $usuario['name'];

        $exp = time() + (60 * 60 * 24 * 30);
        setcookie('user', $usuario['name'], $exp);

        header('Location: index.php');
      }
    }

    if(!$_SESSION['user']) {
      $_SESSION['errors'] = ['Usuário ou senha inválidos'];
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/login.css">
  <title>Curso PHP</title>
</head>
<body class="login">
  <header class="header">
    <h1>Curso PHP</h1>
    <h2>Seja Bem Vindo</h2>
  </header>
  <main class="main">
    <div class="content">
      <h3>Identifique-se</h3>
      <?php if($_SESSION['errors']): ?>
        <div class="errors">
          <?php foreach($_SESSION['errors'] as $error): ?>
            <p><?= $error ?></p>
          <?php endforeach; ?>
        </div>
      <?php endif ?>
      <form action="#" method="post">
        <div>
          <label for="email">E-mail</label>
          <input type="email" name="email" id="email">
        </div>
        <div>
          <label for="password">Senha</label>
          <input type="password" name="password" id="password">
        </div>
        <button>Entrar</button>
      </form>
    </div>
  </main>
  <footer class="footer">
    COD3R & ALUNOS © <?= date('Y'); ?>
  </footer>
</body>
</html>