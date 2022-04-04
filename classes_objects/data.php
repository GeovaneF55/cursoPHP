<div class="title">Classe Data</div>

<?php
  class Date {
    public $day = 1;
    public $month = 1;
    public $year = 1970;

    public function present() {
      return "{$this->day}/{$this->month}/{$this->year}";
    }
  }

  $date1 = new Date();
  echo $date1->present(), "<br>";

  $date2 = new Date();
  $date2->day = 19;
  $date2->month = 12;
  $date2->year = 1994;
  echo $date2->present(), "<br>";