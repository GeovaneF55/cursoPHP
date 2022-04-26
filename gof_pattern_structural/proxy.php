<div class="title">Proxy</div>

<?php
class Car
{
  public function __construct($car)
  {
    echo "The $car has started and ready.\n";
  }
}

// === CarProxy that forward to Car class ===
// We can have many Car objects but actually instantiated
// only when necessary with start() method (a.k.a lazy-load)
class CarProxy
{
  private $car;

  public function __construct($car)
  {
    $this->car = $car;
  }

  public function start()
  {
    new Car($this->car);
  }
}

// ---

$cars = [
  new CarProxy("Fit"),
  new CarProxy("Vitz"),
  new CarProxy("Civic"),
  new CarProxy("Polo"),
];
$cars[1]->start();
// Output: The Vitz has started and ready
echo "<br>";

$cars[3]->start();
  // Output: The Polo has started and ready.