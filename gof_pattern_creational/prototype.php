<div class="title">Protótipo</div>

<?php
  class Car
  {
      public $color = "White";
      public $doors = 4;
  
      // This magic method automatically invoke when attempting
      // to copy instance (object) of this class with `clone`
      public function __clone()
      {
          echo "Cloning Car...<br>";
      }
  }
  
  // ---
  
  $car = new Car();

  print_r($car);
  echo "<br>";
  
  // Creating new object by cloning
  $car2 = clone $car;
  
  print_r($car2);
  echo "<br>";
  // Output:
  // Cloning Car...
  // Car Object([color] => White, [doors] => 4)