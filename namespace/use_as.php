<?php namespace Other\Name; ?>

<div class="title">Use/As</div>

<?php
  echo __NAMESPACE__ . '<br>';

  include('use_as_archive.php');

  function sum($a, $b) {
    return $a . $b; // Função que concatena
  }

  class Classe {
    public $var;

    function func() {
      echo __NAMESPACE__ . '->' . __CLASS__ . '->' . __METHOD__ . '<br>';
    }
  }

  echo \Name\To\Big\constante . '<br>';

  use const Name\To\Big\constante;

  echo constante . '<br>';

  use Name\To\Big as ctx;

  echo sum(1, 2) . '<br>';
  echo ctx\sum(1, 2) . '<br>';

  // use function Name\To\Big\sum;
  use function Name\To\Big\sum as realSum;

  echo realSum(5, 8) . '<br>';

  $a = new Classe();
  $a->func();

  $b = new \Name\To\Big\Classe();
  $b->func();

  $c = new ctx\Classe();
  $c->func();

  use \Name\To\Big\Classe as D;

  $d = new D();
  $d->func();