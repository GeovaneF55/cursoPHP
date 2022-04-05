<div class="title">Membros Estáticos</div>

<?php
  class A {
    public $nonStaticVar = 'Variável de instância';
    public static $staticVar = 'Variável de classe (estática)';

    public function showA() {
      echo "showA() Não estático = {$this->nonStaticVar}<br>";
      // Tentativa 1
      // echo "Não estático = {$this->staticVar}<br>";

      // Tentativa 2
      // echo  "Estático = {self::$staticVar}<br>";

      // Tentativa 3
      echo  "showA() Estático = " . self::$staticVar . "<br>";
    }

    public static function showStaticA() {
      echo "showStaticA() Estático = " . self::$staticVar . "<br>";
    }
  }

  $a = new A();
  $a->showA();

  $a->showStaticA(); // Não é a forma ideal

  echo A::$staticVar . "<br>"; // É a forma ideal
  A::showStaticA(); // É a forma ideal

  A::$staticVar = "Alterado o membro de Classe";
  echo A::$staticVar . "<br>"; 