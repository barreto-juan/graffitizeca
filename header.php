<?php

  session_start();
  if (((!isset($_SESSION['usuario'])) == TRUE) AND ((!isset($_SESSION['senha'])) == TRUE)) {
    header('location:index.php');
  }

  $userLogged = $_SESSION['usuario'];


  require_once "create_db.php";
  require_once "create_tb.php";
  require_once "connection.php";

?>

<!DOCTYPE html>
<html lang="ptbr" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">

    <link rel="shotcut icon" href="assets/img/logo-firma.jpeg">

    <title>Graffiti Zeca - Pinturas e Letreiros</title>
  </head>
