<div class="title">Modificador Final</div>

<?php
  abstract class AbstractClass {
    abstract public function method1();
    
    final public function method2() {
      echo "Final method2 <br>";
    }
  }

  class ConcreteClass extends AbstractClass {
    public function method1() {
      echo "ConcreteClass method1 <br>";
    }

    // public function method2() {
    //   echo "ConcreteClass method2 <br>";
    // }
  }

  $class = new ConcreteClass();
  $class->method1();
  $class->method2();

  final class UniqueClass {
    public $attr = "Valor Único!!!";
  }

  $unique = new UniqueClass();
  echo $unique->attr, "<br>";

  // class OtherClass extends UniqueClass {
  //   public $att;
  // }

  echo "Fim! <br>";
