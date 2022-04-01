<div class="title">Switch</div>

<?php
  $category = 'Luxo';
  $price = 0.0;
  $car = '';

  if($category === 'Luxo') {
    $car = 'Mercedes';
    $price = 250000;
  } elseif ($category === 'SUV') {
    $car = 'Renegade';
    $price = 80000;
  } elseif ($category === 'sedan') {
    $car = 'Etios';
    $price = 55000;
  } else {
    $car = 'Mobi';
    $price = 33000;
  }

  $formatPrice = number_format($price, 2, ',', '.');
  echo "<p>Carro: $car<br>Preço: R$ $formatPrice </p>";

  $category = 'suv';

  switch(strtolower($category)) {
    case 'luxo':
      $car = 'Mercedes';
      $price = 250000;
      break;
    case 'suv':
    case 'suv básico':
      $car = 'Renegade';
      $price = 80000;
      break;
    case 'sedan':
      $car = 'Etios';
      $price = 55000;
      break;
    default:
      $car = 'Mobi';
      $price = 33000;
      break;
  }

  $formatPrice = number_format($price, 2, ',', '.');
  echo "<p>Carro: $car<br>Preço: R$ $formatPrice </p>";