<?php namespace App; ?>

<div class="title">Sub-Namespaces</div>

<?php
  echo __NAMESPACE__ . '<br>';

  const constant = 123;
  echo constant . '<br>';

  namespace App\Principal;

  echo __NAMESPACE__ . '<br>';

  const constant = 234;
  echo constant . '<br>';


  namespace App\Principal\Specific;

  echo __NAMESPACE__ . '<br>';

  const constant = 345;
  echo constant . '<br>';

  echo constant . '<hr>';

  echo constant('\\' . __NAMESPACE__ . '\constant') . '<br>';
  echo \App\constant . '<br>';
  echo \App\Principal\constant . '<br>';
  echo \App\Principal\Specific\constant . '<br>';