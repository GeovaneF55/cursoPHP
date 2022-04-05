<div class="title">Classe Abstrata</div>

<?php
  abstract class AbstractClass {
      abstract public function method1();
      abstract protected function method2($param);
  }

  abstract class AbstractClassSon extends AbstractClass {
    public function method1() {
        echo "Method 1<br>";
    }

    function method2($param) {
        echo "Method with $param 2<br>";
    }

    abstract public function method3();
  }

  class Concrete extends AbstractClassSon {
    public function method1() {
      echo "Subscribe Method 1<br>";
    }

    public function method3() {
      echo "Method 3<br>";
    }
  }

  $c = new Concrete();

  $c->method1();
  // $c->method2('externo');
  $c->method3();

  var_dump($c instanceof Concrete);
  echo "<br>";

  var_dump($c instanceof AbstractClassSon);
  echo "<br>";
  
  var_dump($c instanceof AbstractClass);
  echo "<br>";

  echo "Fim!<br>";