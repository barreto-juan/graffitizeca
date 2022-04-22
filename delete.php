<?php

require_once "header.php";
require_once "sidebar.php";
require_once "process.php";

    $getIdServico = $_GET['idServico'];

    deletaServico($getIdServico);

    if($setSQL && mysqli_affected_rows($getConnection) == 0){
        echo "
            <div class=\"alert alert-danger\" role=\"alert\">
                Falha ao excluir serviço da agenda!
            </div>
        ";
        require_once "footer.php";
        header("refresh");
        exit;
    } elseif($setSQL && mysqli_affected_rows($getConnection) > 0){
        echo "
            <div class=\"alert alert-success\" role=\"alert\">
                Sucesso ao excluir serviço da agenda!
            </div>
        ";
        require_once "footer.php";
        header("refresh");
        exit;
      }


?>
