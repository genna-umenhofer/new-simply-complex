<?php

include("../.env.php");
include("../functions.php");

  $servername = $dbserver;
  $username = $dbuser;
  $password = $dbpassword;
  $databasename = $dbname;

    // Create Connection
    $conn = mysqli_connect($servername, $username, $password, $databasename);
  
    // Check Connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }