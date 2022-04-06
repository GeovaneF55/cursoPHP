<?php
  class Person {
    public $name;
    public $age;

    function __construct($name, $age) {
      $this->name = $name;
      $this->age = $age;

      echo "Pessoa criada <br>";
    }

    function __destruct() {
      echo "Pessoa destruida <br>";
    }

    public function present() {
      echo "Olá, eu sou {$this->name} e tenho {$this->age} anos <br>";
    }
  }