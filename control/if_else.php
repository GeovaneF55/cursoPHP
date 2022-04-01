<div class="title">If/Else</div>

<?php
  if(true) {
    echo "Serei impresso? <br>";
  }
  
  if(true) {
    echo "Verdadeiro - Parte A <br>";
    echo "Verdadeiro - Parte B <br>";
  } else {
    echo "False - Parte A <br>";
    echo "False - Parte B <br>";
  }

  if(false) {
    echo "Passo A <br>";
  } else if(true) {
    echo "Passo B <br>";
  } elseif(true) {
    echo "Passo C <br>";
  } else {
    echo "Último passo <br>";
  }

  if(false) {
    echo "Passo A <br>";
  } elseif(false) {
    echo "Passo B <br>";
  } elseif(false) {
    echo "Passo C <br>";
  } elseif(false) {
    echo "Passo D <br>";
  } elseif(false) {
    echo "Passo E <br>";
  }

  echo "Fim <br>";