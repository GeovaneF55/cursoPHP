<div class="title">Desafio erros</div>

<?php
  // interface Template {
  //   function method1();
  //   public function method2($param);
  // }

  // abstract class AbstractClass extends Template {
  //     public function method3() {
  //       echo "Estou funcionando";
  //     }
  // }

  // class ConcreteClass implements AbstractClass {
  //   function __construct($param) {
      
  //   }
  // }

  // $example = Concrete();
  // $example.method3();

  interface Template {
    function method1();
    public function method2($param);
  }

  abstract class AbstractClass implements Template {
    public function method1() {
      
    }

    public function method3() {
      echo "Estou funcionando";
    }
  }

  class ConcreteClass extends AbstractClass {
    function __construct($param) {
      
    }

    public function method2($param) {
      
    }
  }

  $example = new ConcreteClass('...');
  $example->method3();