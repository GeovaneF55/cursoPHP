<?php
  function newConnection($database = 'course_php') {
    $host = '172.22.0.1';
    $port = '3306';

    $server = $host . ':' . $port;
    $user = 'root';
    $password = 'password';

    $connection = new mysqli($server, $user, $password, $database);

    if($connection->connect_error) {
      die('Error: ' . $connection->connect_error);
    }

    return $connection;
  }