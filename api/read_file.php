<div class="title">Ler Arquivo</div>

<?php
  $file = fopen('test.txt', 'r');
  echo fread($file, 10), '<br>';
  echo fread($file, 10), '<br>';
  fclose($file);

  echo '<hr>';

  $file = fopen('test.txt', 'r');
  $size = filesize('test.txt');
  echo $size, '<br>';
  echo fread($file, $size), '<br>';
  fclose($file);

  echo '<hr>';

  $file = fopen('test.txt', 'r');
  echo fgets($file), '<br>';
  echo fgets($file), '<br>';
  var_dump(fgets($file));
  echo '<br>';
  fclose($file);

  echo '<hr>';

  $file = fopen('test.txt', 'r');
  while(!feof($file)) {
    echo fgets($file), '<br>';
  }
  fclose($file);

  echo '<hr>';

  $file = fopen('test.txt', 'r');
  while(!feof($file)) {
    echo fgetc($file);
  }
  echo '<br>';
  fclose($file);

  echo '<hr>';

  $file = fopen('test.txt', 'r+');
  echo fgets($file), '<br>';
  echo fgets($file), '<br>';
  fwrite($file, "\nAdicionado durante a leitura");
  fclose($file);

  echo "Fim!";
