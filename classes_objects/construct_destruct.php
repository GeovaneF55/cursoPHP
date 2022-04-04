<div class="title">Construtor & Destrutor</div>

<?php
  class Person {
    public $name;
    public $age;

    function __construct($name, $age = 18) {
      echo "Construtor chamado! <br>";
      $this->name = $name;
      $this->age = $age;
    }

    function __destruct() {
      echo "Destrutor chamado! <br>";
    }

    function present() {
      return "{$this->name}, {$this->age} anos";
    }
  }

  $person1 = new Person("João", 20);
  $person2 = new Person("Maria", 25);

  // $person3 = new Person(); // Erro!

  echo $person1->present(), "<br>";
  echo $person2->present(), "<br>";

  unset($person1);
  $person2 = null;

  echo "Fim! <br>";
