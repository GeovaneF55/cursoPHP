<div class="title">Arrays Constantes</div>

<?php
  const FRUIS = array('Laranja', 'Abacaxi'); 
  // FRUITS[0] = 'Banana';
  // FRUITS[] = 'Banana';
  echo FRUIS[0], '<br>';

  const CARS = ["fiat" => "Uno", "ford" => "Fiesta"];
  // CARS["bmw"] = "325i";
  echo CARS["fiat"], "<br>";

  define("CITYS", ["Belo Horizonte", "Recife"]);
  // CITYS[] = "Rio de Janeiro";
  echo CITYS[1], "<br>";