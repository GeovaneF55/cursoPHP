<div class="title">Interpreter</div>

<?php
interface Converter
{
  public function show();
}

// === A Simple Converter ===
// That convert Gallon to Litre
class GallonToLitre implements Converter
{
  const GALON_RATE = 3.785411784;
  private $gallon;

  public function __construct($gallon)
  {
    $this->gallon = $gallon;
  }

  public function show()
  {
    return round($this->gallon * $this::GALON_RATE);
  }
}

// === A Simple Converter ===
// That convert Mile to Kilometer
class MileToKilometer implements Converter
{
  const MILE_RATE = 1.609344;
  private $mile;

  public function __construct($mile)
  {
    $this->mile = $mile;
  }

  public function show()
  {
    return round($this->mile * $this::MILE_RATE);
  }
}

// === An Intepreter ===
// That interpret to Kilometer per Litre by using existing converters.
// Consider this as structuring a sentence using grammers (converters).
class MpgToKml implements Converter
{
  private $g2l;
  private $m2k;

  public function __construct(Converter $g2l, Converter $m2k)
  {
    $this->g2l = $g2l;
    $this->m2k = $m2k;
  }

  public function show()
  {
    echo  $this->g2l->show() . "l/" . $this->m2k->show() . "k<br>";
  }
}

// ---

$mpg2kml = new MpgToKml(new GallonToLitre(1), new MileToKilometer(20));
$mpg2kml->show();
// Output: 4l/32k

$mpg2kml = new MpgToKml(new GallonToLitre(3.2), new MileToKilometer(17.6));
$mpg2kml->show();
// Output: 12l/28k