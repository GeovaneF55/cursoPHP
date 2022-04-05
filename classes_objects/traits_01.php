<div class="title">Traits #01</div>

<?php
  trait validation {
    public $a = "Valor A";

    public function validateString($string) {
      return isset($string) && $string != '';
    }
  }

  trait betterValidation {
    public $b = "Valor B";
    private $c = "Valor C (privado)";

    public function betterValidateString($string) {
      return isset($string) && trim($string );
    }
  }

  class User {
    use validation, betterValidation;

    public function printC(){
      echo $this->c, "<br>";
    }
  }

  // var_dump(validation->validateString('')); // Error

  $user = new User();
  var_dump($user->validateString(' '));
  echo '<br>';
  var_dump($user->betterValidateString(' '));
  echo '<br>';
  echo $user->a . '<br>' . $user->b . '<br>';
  $user->printC();