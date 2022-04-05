<div class="title">Métodos Mágicos</div>

<?php
  class Person {
    public $name;
    public $age;

    function __construct($name, $age) {
      echo 'Construtor Chamado <br>';

      $this->name = $name;
      $this->age = $age;
    }

    function __destruct() {
      echo 'Destrutor Chamado <br>';
    }

    public function __toString()
    {
      return "Nome: {$this->name}, Idade: {$this->age}";
    }

    public function present() {
      echo $this . "<br>";
    }

    public function __get($name)
    {
      echo "Acessando o atributo '$name' <br>";
    }

    public function __set($name, $value)
    {
      echo "Atribuindo o valor '$value' ao atributo '$name' <br>";
    }

    public function __call($name, $arguments)
    {
      echo "Chamando o método '$name' <br>";
      echo "Argumentos: <br>";
      print_r($arguments);
      echo "<br>";
    }
  }

  $person = new Person('João', 20); // __construct
  $person->present();

  echo $person, "<br>";

  $person->name = "Maria";
  $person->present();

  echo $person->name, "<br>";
  $person->fullname; // __get()

  $person->fullname = 'Muito Legal!!'; // __set()

  $person->exec(); // __call()
  $person->exec(1, 'Teste', [1, 2, 3]); // __call()

  unset($person); // __destruct()