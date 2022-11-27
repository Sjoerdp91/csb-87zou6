<?php
  require once 'login.php';
  $connection = new mysql($db_hostname, $db_database, $db_username, $db_password);

  if ($connection->connect_error) die($connection->connect_error)
  ?>