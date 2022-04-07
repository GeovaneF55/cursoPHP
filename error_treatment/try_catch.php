<div class="title">Try/Catch</div>

<?php
  // echo 7 / 0;
  // echo intdiv(7, 0);

  try {
    echo intdiv(7, 0);
  } catch (Error $e) {
    echo 'Teve um erro aqui<br>';
  }

  try {
    throw new Exception('Deu ruim');
    echo intdiv(7, 0);
  } catch (DivisionByZeroError $e) {
    echo 'Divisão por zero<br>';
  } catch (Throwable $e) {
    echo 'Erro encontrado: ' . $e->getMessage() . '<br>';
  } finally {
    echo 'Sempre será executado<br>';
  }

  echo 'Execução continua... <br>';