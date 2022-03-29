<div class="title">Desafio String</div>

<?php
  echo 'Enunciado' . '<br>';
  echo 'Avaliando os métodos da documentação da string. ';
  echo 'Qual o método que a posição do texto \'abc\' ';
  echo 'na string \'!AbcaBcabc\' retorne 1?' . '<br>';

  echo strpos('!AbcaBcabc', 'abc') . '<br>';
  echo stripos('!AbcaBcabc', 'abc') . '<br>';
  echo strpos(strtolower('!AbcaBcabc'), 'abc') . '<br>';
  echo strpos(strtolower('!AbcaBcabc'), strtolower('ABC')) . '<br>';