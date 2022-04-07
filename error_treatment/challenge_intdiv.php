<?php
  namespace Aritmetics;

  class NotIntException extends \Exception {

  }

  function intdiv($a, $b) {
    if($b == 0) {
      throw new \DivisionByZeroError();
    }

    if($a % $b > 0) {
      throw new NotIntException();
    }

    return $a / $b;
  }