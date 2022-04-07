<div class="title">Desafio Intdiv</div>

<?php
  require_once 'challenge_intdiv.php';

  use function \Aritmetics\intdiv;

  $operations = [
    [8,3],
    [8,0],
    [8,2]
  ];

  foreach($operations as $operation) {
    try {
      $a = $operation[0];
      $b = $operation[1];

      echo intdiv($a, $b), '<br>';
    } catch (DivisionByZeroError $e) {
      echo 'Division by zero error', '<br>';
    } catch (\Aritmetics\NotIntException $e) {
      echo 'Not an integer error', '<br>';
    } catch (\Exception $e) {
      echo 'Unknown error', '<br>'; 
    }
  }

  echo '<hr>';

  foreach($operations as $operation) {
    try {
      $a = $operation[0];
      $b = $operation[1];
      echo \intdiv($a, $b), '<br>';
    } catch (DivisionByZeroError $e) {
      echo 'Division by zero error', '<br>';
    } catch (\Aritmetics\NotIntException $e) {
      echo 'Not an integer error', '<br>';
    } catch (\Exception $e) {
      echo 'Unknown error', '<br>'; 
    }
  }