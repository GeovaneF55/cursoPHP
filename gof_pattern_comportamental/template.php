<div class="title">Template</div>

<?php
// === A Template for all Car ===
abstract class Car
{
  public $color = "White";
  public $doors = 4;

  public function __construct($name)
  {
    $this->name = $name;
  }

  public function loadPassenger()
  {
    echo "The $this->name is loading passengers...<br>";
  }
}

class Minivan extends Car
{
  public $doors = 5;

  public function loadGrocery()
  {
    echo "The $this->name is loading grocery...<br>";
  }
}

class SportCar extends Car
{
  public $doors = 2;
  public $color = "Red";

  public function loadPassenger()
  {
    echo "The $this->name is loading a buddy...<br>";
  }
}

// ---

$fit = new Minivan("Fit");
$fit->loadPassenger();
// Output: The Fit is loading passengers...
$fit->loadGrocery();
// Output: The Fit is loading grocery...

$evo = new SportCar("Evo");
$evo->loadPassenger();
// Output: The Evo is loading a buddy...