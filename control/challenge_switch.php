<div class="title">Desafio Switch</div>

<form action="#" method="post">
  <input type="text" name="param" id="param">
  <select name="convertion" id="convertion">
    <option value="km-mile">Km > Milha</option>
    <option value="mile-km">Milha > Km</option>
    <option value="meter-km">Metro > Km</option>
    <option value="km-meter">Km > Metro</option>
    <option value="celsius-fahrenheit">Celsius > Fahrenheit</option>
    <option value="fahrenheit-celsius">Fahrenheit > Celsius</option>
  </select>
  <button>Calcular</button>
</form>

<style>
  form > * {
    font-size: 1.8rem;
  }
</style>

<?php
  const KILOMETER_TO_MILES = 0.621371;
  const METER_TO_KILOMETER = 0.001;
  const CELSIUS_TO_FAHRENHEIT = 1.8;

  $param = $_POST['param'] ?? 0;

  if(isset($_POST['convertion'])) {
    $convertion = $_POST['convertion'];

    echo $param, '<br>';
    echo $convertion, '<br>';

    switch($convertion) {
      case 'km-mile':
        $result = $param * KILOMETER_TO_MILES;
        $message = "$param Km(s) = $result Milha(s)";
        break;
      case 'mile-km':
        $result = $param / KILOMETER_TO_MILES;
        $message = "$param Milha(s) = $result Km(s)";
        break;
      case 'meter-km':
        $result = $param * METER_TO_KILOMETER;
        $message = "$param Metro(s) = $result Km(s)";
        break;
      case 'km-meter':
        $result = $param / METER_TO_KILOMETER;
        $message = "$param Km(s) = $result Metro(s)";
        break;
      case 'celsius-fahrenheit':
        $result = ($param * CELSIUS_TO_FAHRENHEIT) + 32;
        $message = "{$param}° Celsius = {$result}° Fahrenheit";
        break;
      case 'fahrenheit-celsius':
        $result = ($param - 32) / CELSIUS_TO_FAHRENHEIT;
        $message = "{$param}° Fahrenheit = {$result}° Celsius";
        break;
      default:
        $message = 'Não foi possível converter!';
        break;
    }

    echo $message;
  }