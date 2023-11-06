<?php $connection = new mysqli("localhost","root","","bus");
// Check connection

if ($connection -> connect_errno) {

    echo "Failed to connect to MySQL: " . $connection -> connect_error;
  
    exit();
  
  }

  $connection -> set_charset("utf8");