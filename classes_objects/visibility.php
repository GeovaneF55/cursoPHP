<div class="title">Visibilidade</div>

<?php
  class A {
    public $public = "Public";
    protected $protected = "Protected";
    private $private = "Private";

    public function showA() {
      echo "Classe A) público = {$this->public}<br>";
      echo "Classe A) protegido = {$this->protected}<br>";
      echo "Classe A) privado = {$this->private}<br>";
    }

    public function showNotShow() {
      $this->notShow('na Pública');
    }

    protected function showNotShowByHeritage() {
      $this->notShow('na Pública por herança');
    }

    private function notShow($fromPublic = '') {
      $not = empty($fromPublic) ? 'não ' : '';
      echo "Classe A) {$not} mostra a função privada {$fromPublic}<br>";
    }
  }

  $a = new A();
  $a->showA();

  // $a->showNotShowByHeritage(); // Erro
  // $a->notShow(); // Erro!
  $a->showNotShow();

  echo "<hr>";

  class B extends A {
    public function showB() {
      echo "Classe B) público = {$this->public}<br>";
      echo "Classe B) protegido = {$this->protected}<br>";
      echo "Classe B) privado = {$this->private}<br>";
    }

    public function showHeritages() {
      parent::showNotShowByHeritage();
    }
  }

  $b = new B();
  $b->showA();
  $b->showB();
  // $b->showNotShowByHeritage(); // Erro!
  // $b->notShow(); // Erro!
  $b->showHeritages();

  echo "Fim!";