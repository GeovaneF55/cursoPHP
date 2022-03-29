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
      <nav class="modules">
        <div class="module green">
          <h3>Módulo 01</h3>
          <ul>
            <li>
              <a href="exercise.php?dir=basic&file=hello">
                Olá PHP
              </a>
            </li>
            <li>
              <a href="exercise.php?dir=basic&file=html">
                Integração HTML
              </a>
            </li>
            <li>
              <a href="exercise.php?dir=basic&file=css">
                Integração CSS
              </a>
            </li>
            <li>
              <a href="exercise.php?dir=basic&file=comments">
                Comentários PHP
              </a>
            </li>
            <li>
              <a href="exercise.php?dir=basic&file=challenge">
                Desafio
              </a>
            </li>
          </ul>
        </div>
        <div class="module red">
          <h3>Módulo 02</h3>
          <ul>
            <li>
              <a href="exercise.php?dir=type&file=int">
                Tipo Inteiro
              </a>
            </li>
            <li>
              <a href="exercise.php?dir=type&file=float">
                Tipo Float
              </a>
            </li>
            <li>
              <a href="exercise.php?dir=type&file=aritmethics">
                Operações Aritméticas
              </a>
            </li>
            <li>
              <a href="exercise.php?dir=type&file=challenge_precedency">
                Desafio de Precedência
              </a>
            </li>
            <li>
              <a href="exercise.php?dir=type&file=string">
                Tipo String
              </a>
            </li>
            <li>
              <a href="exercise.php?dir=type&file=challenge_string">
                Desafio String
              </a>
            </li>
            <li>
              <a href="exercise.php?dir=type&file=boolean">
                Tipo Booleano
              </a>
            </li>
            <li>
              <a href="exercise.php?dir=type&file=convertions">
                Conversões
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </main>
  <footer class="footer">
    COD3R & ALUNOS © <?= date('Y'); ?>
  </footer>
</body>
</html>