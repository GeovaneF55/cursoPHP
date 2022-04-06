<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/styles.css">
  <title>Curso PHP</title>
</head>
<body>
  <header class="header">
    <h1>Curso PHP</h1>
    <h2>Índice dos Exercícios</h2>
  </header>
  <main class="main">
    <div class="content">
      <?php require_once('menu.php'); ?>
    </div>
  </main>
  <footer class="footer">
    COD3R & ALUNOS © <?= date('Y'); ?>
  </footer>
</body>
</html>