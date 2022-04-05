<div class="title">Traits #02</div>

<?php
  trait validation {
    public function validateString($string) {
      return isset($string) && $string != '';
    }
  }

  trait betterValidation {
    public function validateString($string) {
      return isset($string) && trim($string );
    }
  }

  class User {
    use validation, betterValidation {
      betterValidation::validateString insteadOf validation;
      //validation::validateString insteadOf betterValidation;

      validation::validateString as simpleValidation;
    }
  }

  $user = new User();
  var_dump($user->validateString(' '));
  echo '<br>';
  var_dump($user->simpleValidation(' '));
  echo '<br>';