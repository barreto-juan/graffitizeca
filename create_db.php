<?php

  $setHost = "localhost";
  $setUser = "root";
  $setPass = "";
  $setDB = "graffitizeca";

  $getConnection = mysqli_connect($setHost, $setUser, $setPass);

  if (!mysqli_select_db($getConnection, $setDB))
    echo "erro : <pre>" . $getConnection->errno . " -> " . $getConnection->error . "</pre> <br>";


  $setSQL = "CREATE DATABASE IF NOT EXISTS graffitizeca";

  if ($getConnection->query($setSQL) === FALSE)
    echo "<script> alert(\"erro : " . $getConnection->error . "\") </script>";


  $getConnection->close();
