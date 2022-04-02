<div class="title">Desafio Palíndromo</div>

<?php

  function palindromeFor($word) {
    $lastIndex = strlen($word) - 1;

    for($i = 0; $i <= $lastIndex; $i++) {
      if($word[$i] != $word[$lastIndex - $i]) {
        return 'Não';
      }
    }
    return 'Sim';
  }

  echo palindromeFor('arara'), "<br>";
  echo palindromeFor('bola'), "<br>";
  echo palindromeFor('ana'), "<br>";
  echo palindromeFor('abccba'), "<br>";

  echo '<hr>';

  function palindrome($word) {
    return $word === strrev($word) ? 'Sim' : 'Não';
  }

  echo palindrome('arara'), "<br>";
  echo palindrome('bola'), "<br>";
  echo palindrome('ana'), "<br>";
  echo palindrome('abccba'), "<br>";