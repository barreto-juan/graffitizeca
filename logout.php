<?php
    session_start();

    if (isset($_SESSION['usuario'])) {
        session_destroy();
        unset($_SESSION['usuario']);
        unset($_SESSION['senha']);
        header('location:index.php');
        exit();
    }

?>
