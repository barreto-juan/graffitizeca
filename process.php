<?php

  require_once "connection.php";



  function novoServico($getCliente, $getServico, $getData, $getLocal, $getFone, $getValor, $getStatus, $getPagamento){
    global $getConnection;
    $setQuery = "INSERT INTO servicos(`servico`, `cliente`, `data`, `local`, `telefone`, `valor`, `status`, `pagamento`) VALUES(\"$getServico\", \"$getCliente\", \"$getData\", \"$getLocal\", \"$getFone\", \"$getValor\", \"$getStatus\", \"$getPagamento\");";

    $setSQL = $getConnection->query($setQuery) or die($getConnection->error);

    return $setSQL;
  }




  function retornaServicos(){
    global $getConnection;
    $setQuery = "SELECT * FROM `servicos` WHERE 1";
    $setSQL = $getConnection->query($setQuery) or die($getConnection->error);

    return $setSQL;

  }

  function consultaServico($getIdServico){
    global $getConnection;
    $setQuery = "SELECT * FROM `servicos` WHERE id=$getIdServico";
    $setSQL = $getConnection->query($setQuery) or die($getConnection->error);

    return $setSQL;

  }




  function atualizaServico($getIdServico, $getCliente, $getServico, $getData, $getLocal, $getFone, $getValor, $getStatus, $getPagamento){
    global $getConnection;
    $setQuery = "UPDATE `servicos` SET `servico`=\"$getServico\",`cliente`=\"$getCliente\", `data`=\"$getData\",`local`=\"$getLocal\",`telefone`=\"$getFone\",`valor`=\"$getValor\",`status`=\"$getStatus\",`papagamento`=\"$getPagamento\" WHERE `id`=$getIdServico";
    $setSQL = $getConnection->query($setQuery) or die($getConnection->error);

    return $setSQL;

  }




  function deletaServico($getIdServico){
    global $getConnection;
    $setQuery = "DELETE FROM `servicos` WHERE `id`=$getIdServico";
    $setSQL = $getConnection->query($setQuery) or die($getConnection->error);

    return $setSQL;

  }
