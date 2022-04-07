<div class="title">Erros Personalizados</div>

<?php
  class AgeGroupException extends Exception {
    public function __construct($message = null, $code = 0, Throwable $previous = null) {
      parent::__construct($message, $code, $previous);
    }
  }

  function calculeRetirement($age) {
    if ($age < 18) {
      throw new AgeGroupException('Ainda está muito longe!');
    } else if ($age > 70) {
      throw new AgeGroupException('Você já está aposentado!');
    }
    return 70 - $age;
  }

  $validateAges = [15, 30, 60, 80];

  foreach($validateAges as $age) {
    try {
      $timeLeft = calculeRetirement($age);
      echo "Idade: $age, Você vai se aposentar em $timeLeft anos<br>";
    } catch (AgeGroupException $e) {
      echo "Não foi possível calcular para $age anos.<br>";
      echo "Motivo: {$e->getMessage()}<br>";
    }
  }

  echo "Fim!<br>";