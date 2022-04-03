<div class="title">Primeira Classe</div>

<?php
  class Client {
    // atributos
    public $name = 'Fulano';
    public $age = 18;

    public function present() {
      return "Olá, eu sou {$this->name} e tenho {$this->age} anos.";
    }
  }

  $c1 = new Client();
  echo $c1->present(), '<br>';

  $c2 = new Client();

  echo $c2->name, '<br>';
  echo $c2->age, '<br>';

  $c2->name = 'Beltrano';
  $c2->age = 20;

  echo $c2->present(), '<br>';