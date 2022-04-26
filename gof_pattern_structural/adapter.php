<div class="title">Adapter</div>

<?php
  interface TwoPins
  {
      public function one();
      public function two();
  }
  
  interface ThreePins
  {
      public function one();
      public function two();
      public function three();
  }
  
  class TwoPinsSocket implements TwoPins
  {
      public function one()
      {
          echo "Pin one exists.<br>";
      }
  
      public function two()
      {
          echo "Pin two exists.<br>";
      }
  }
  
  class ThreePinsSocket implements ThreePins
  {
      public function one()
      {
          echo "Pin one exists.<br>";
      }
  
      public function two()
      {
          echo "Pin two exists.<br>";
      }
  
      public function three()
      {
          echo "Pin three exists.<br>";
      }
  }
  
  // === Adapter  ===
  // which convert TwoPins object to ThreePins
  class ThreePinsAdapter implements ThreePins
  {
    private $socket;

    public function __construct(TwoPins $socket)
    {
      $this->socket = $socket;
    }

    public function one()
    {
      $this->socket->one();
    }

    public function two()
    {
      $this->socket->two();
    }

    public function three()
    {
      echo "Pin three doesn't exists, but it's OK.<br>";
    }
  }
  
  class Lamp
  {
    private $socket;

    public function __construct(ThreePins $socket)
    {
      echo "Lamp is ready.<br>";
      $this->socket = $socket;
    }

    public function turnOn() {
      $this->socket->one();
      $this->socket->two();
      $this->socket->three();
    }
  }
  
  // ---
  
  $threepins = new ThreePinsSocket();
  $twopins = new TwoPinsSocket();
  $twopinsWithAdapter = new ThreePinsAdapter($twopins);
  
  $lamp1 = new Lamp($threepins);
  $lamp1->turnOn();
  // Output:
  // Pin one exists.
  // Pin two exists.
  // Pin three exists.

  echo "<br>";
  
  $lamp2 = new Lamp($twopinsWithAdapter);
  $lamp2->turnOn();
  // Output:
  // Pin one exists.
  // Pin two exists.
  // Pin three doesn't exists, but it's OK.