<div class="title">Bridge</div>

<?php
  interface Engine
  {
      public function run();
  }
  
  class Diesel implements Engine
  {
      public function run()
      {
          echo "Broom! Broom!<br>";
      }
  }
  
  class Petrol implements Engine
  {
      public function run()
      {
          echo "Wroom! Wroom!<br>";
      }
  }
  
  // === EngineBridge ===
  // That help us switch engine type
  // at run-time through set() method
  class EngineBridge
  {
      public $engine;
  
      public function __construct(Engine $engine)
      {
          $this->engine = $engine;
      }
  
      public function set(Engine $engine)
      {
          $this->engine = $engine;
      }

      public function run()
      {
          $this->engine->run();
      }
  }
  
  // ---
  
  $diesel = new Diesel();
  $petrol = new Petrol();
  
  $bridge = new EngineBridge($diesel);
  $bridge->run();
  // Output:
  // Broom! Broom!
  
  $bridge->set($petrol);
  $bridge->run();
  // Output:
  // Wroom! Wroom!