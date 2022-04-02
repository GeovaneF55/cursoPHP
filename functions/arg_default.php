<div class="title">Argumento Padrão</div>

<?php
  function salutation($name = 'Senhor(a)', $lastname = 'Cliente') {
    return "Bem vindo, {$name} {$lastname}! <br>";
  }

  echo salutation();
  echo salutation(null);
  echo salutation(null, null);
  echo salutation('Mestre', 'Supremo');

  function noteOrder($food, $drink = 'Água') {
    return "O seu pedido é: {$food} e {$drink} <br>";
  }

  echo noteOrder('Hamburguer');
  echo noteOrder('Pizza', 'Refrigerante');

  function noteOrder2($drink = 'Água', $food) {
    return "O seu pedido é: {$food} e {$drink} <br>";
  }

  // echo noteOrder('Hamburguer');
  echo noteOrder2('Refrigerante2', 'Pizza2');