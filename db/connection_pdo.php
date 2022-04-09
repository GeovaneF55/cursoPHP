<?php
  function newConnection($database = 'course_php') {
    $host = '172.22.0.1';
    $port = '3306';

    $server = $host . ':' . $port;
    $user = 'root';
    $password = 'password';

    try {
      $connection = new PDO("mysql:host=$server;dbname=$database", $user, $password);
      return $connection;
    } catch(PDOException $e) {
      die('Error: ' . $e->getMessage());
    }
  }