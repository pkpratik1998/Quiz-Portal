<?php

  //variables
  $dbHost = "localhost";
  $dbName = "quiz";
  $dbUser = "root";
  $dbPass = "";

  //connection
  //create mysqli object
  $mysqli = new mysqli($dbHost,$dbUser,$dbPass,$dbName);

  //Error handling
  if($mysqli->connect_error)
  {
    print ("connection failed " . $mysqli->connect_error);
  }
?>
