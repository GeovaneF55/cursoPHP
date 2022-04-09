<div class="title">Escrever Arquivo</div>

<?php
  $file = fopen('test.txt', 'w');
  fwrite($file, "Valor Inicial\n");

  $str = "Segunda Linha\n";
  fwrite($file, $str);
  fclose($file);

  $file = fopen('test.txt', 'w');
  fwrite($file, "Novo Conteúdo");
  fclose($file);

  $file = fopen('test.txt', 'a');
  fwrite($file, " com novos valores\n");
  fwrite($file, "Adicionando em um segundo momento");
  fclose($file);

  ini_set('display_errors', 1);
  
  $file = fopen('test.txt', 'x');
  fwrite($file, "Arquivo novo!!!");
  fclose($file);