<div class="title">Herança</div>

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

  class User extends Person {
    public $login;

    function __construct($name, $age, $login) {
      parent::__construct($name, $age);
      $this->login = $login;

      echo "Usuário criado <br>";
    }

    function __destruct() {
      echo "Usuário destruido <br>";
      parent::__destruct();
    }

    public function present() {
      echo "Login @{$this->login}! ";
      parent::present();
    }
  }

  $user = new User("João", 20, "joao");
  $user->present();

  unset($user);