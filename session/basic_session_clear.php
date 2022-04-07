<?php
  session_start();
  session_destroy();
  header('Location: basic_session.php');