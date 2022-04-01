<div class="title">Desafio Equação</div>

<?php
  $numA = (6 * (3 + 2)) ** 2;
  $denA = 3 * 2;

  $numB = ((1 - 5) * (2 - 7));
  $denB = 2;

  $upperA = $numA / $denA;
  $upperB = ($numB / $denB) ** 2;

  $upper = ($upperA - $upperB) ** 3;

  $lower = 10 ** 3;

  $result = $upper / $lower;

  echo "O resultado é " . $result;