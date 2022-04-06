<?php
  namespace Name\To\Big;

  echo __NAMESPACE__ . '<br>';

  const constante = 123;

  function sum($a, $b) {
    return $a + $b;
  }

  class Classe {
    public $var;

    function func() {
      echo __NAMESPACE__ . '->' . __CLASS__ . '->' . __METHOD__ . '<br>';
    }
  }
