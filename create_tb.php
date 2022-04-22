<?php

  $setHost = "localhost";
  $setUser = "root";
  $setPass = "";
  $setDB = "graffitizeca";

  $getConnection = mysqli_connect($setHost, $setUser, $setPass);

  if (!mysqli_select_db($getConnection, $setDB))
    echo "erro : <pre>" . $getConnection->errno . " -> " . $getConnection->error . "</pre> <br>";


  $setSQL = "CREATE TABLE IF NOT EXISTS `servicos`(
    `id` int(11) not null primary key auto_increment,
    `servico` text not null,
    `cliente` varchar(255) not null,
    `currenttime` timestamp default current_timestamp,
    `data` datetime not null,
    `local` varchar(255) not null,
    `telefone` varchar(20) not null,
    `valor` float not null,
    `status` varchar(20) not null,
    `pagamento` varchar(10) not null
  );";

  $setSQL .= "CREATE TABLE IF NOT EXISTS `login`(
    `id` int(11) not null primary key auto_increment,
    `usuario` varchar(255) not null,
    `senha` varchar(255) not null
  )";



  if ($getConnection->multi_query($setSQL) === FALSE)
    echo "<script> alert(\"erro : " . $getConnection->error . "\") </script>";

  $getConnection->close();
