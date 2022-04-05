<div class="title">Polimorfismo</div>

<?php
  abstract class Food {
    public $weight;

    function __construct($weight = null) {
      if(!is_null($weight)) {
        $this->weight = $weight;
      }
    }
  }

  class Rice extends Food {

  }

  class GreekRice extends Rice {

  }

  class Bean extends Food {

  }

  class Icecream extends Food {

  }

  class Person {
    public $weight;

    function __construct($weight) {
      $this->weight = $weight;
    }

    public function eat(Food $food) {
      $this->weight += $food->weight;
    }
  }

  $f1 = new Rice(0.65);
  $f2 = new Bean(2.30);
  $f3 = new icecream(1.45);

  $p = new Person(83.45);
  
  $p->eat($f1);
  echo $p->weight, "<br>";

  $p->eat($f2);
  echo $p->weight, "<br>";

  $p->eat($f3);
  echo $p->weight, "<br>";
