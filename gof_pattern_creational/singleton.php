<div class="title">Singleton</div>

<?php
  // === Singleton Class ===
  // This class doesn't accept creating object directly
  // But only accept creating object through make() method
  // to make sure there is only one instance of this class
  class Single
  {
      protected static $me = null;

      protected function __construct()
      {
        // Can`t use new operator to create object
        $this->info = "I am a single.\n";
      }

      protected function __clone() {
        // Can`t clone this
      }

      static function make()
      {
          if (!static::$me) {
              static::$me = new static;
          }

          return static::$me;
      }
  }

  // ---

  ini_set('display_errors', 1);

  $makeSingle1 = Single::make();
  echo $makeSingle1->info, "<br>";
  // Output: I'm a single.

  $makeSingle2 = Single::make();
  echo $makeSingle2->info, "<br>";
  // Output: I'm a single.

  // $newSingle = new Single();
  // echo $newSingle->info;
  // Output: Fatal error: Uncaught Error: Cannot instantiate class Single
