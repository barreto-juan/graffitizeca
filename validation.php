<?php
    session_start();

    require_once "connection.php";

    $getUserLogin = $_POST['usuario'];
    $getUserPassword = md5($_POST['senha']);

    $setQuery = "SELECT * FROM `login` WHERE `usuario`='$getUserLogin' AND `senha`='$getUserPassword' LIMIT 1";

    $setSQL = $getConnection->query($setQuery) or die($getConnection->error);

    if (mysqli_num_rows($setSQL) == 0) {
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('location: orders.php');

    } else {
        $_SESSION['usuario'] = $getUserLogin;
        $_SESSION['senha'] = $getUserPassword;
        header('location: orders.php');
    }
