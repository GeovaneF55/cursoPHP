<?php
  echo "Carregando: include_once_archive.php <br>";
  
  $variable = "Estou definida";

  if(!function_exists('sum')) {
    function sum($a, $b) {
      return $a + $b;
    }
  }