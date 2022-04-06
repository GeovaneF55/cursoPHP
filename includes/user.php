<?php

  require_once('person.php');

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