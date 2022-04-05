<div class="class">Interface</div>

<?php
  interface Animal {
    function breath();
  }

  interface Canine extends Animal {
    function bart();
  }

  interface Feline extends Animal {
    function meow();
  }

  interface Mammal extends Animal {
    function suckle();
  }

  class Dog implements Canine, Mammal {
    function breath() {
      return "Breath in, breath out";
    }

    function bart(): string {
      return "Barting";
    }

    function suckle(): string {
      return "Suckling";
    }
  }

  $animal = new Dog();
  echo $animal->breath(), "<br>";
  echo $animal->bart(), "<br>";
  echo $animal->suckle(), "<br>";

  var_dump($animal instanceof Dog);
  echo "<br>";

  var_dump($animal instanceof Canine);
  echo "<br>";

  var_dump($animal instanceof Mammal);
  echo "<br>";

  var_dump($animal instanceof Animal);
  echo "<br>";

  var_dump($animal instanceof Feline);
  echo "<br>";

  echo "Fim!";