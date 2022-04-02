<div class="title">Desafio Sorteio</div>

<?php
  $names = ["Elza", "Rapunzel", "Branca de Neve", "Cinderela"];
  $index = array_rand($names);

  echo "<div center><h1>{$names[$index]}</h1></div>";
?>

<style>
  [center] {
    display: flex;
    justify-content: center;
  }
</style>