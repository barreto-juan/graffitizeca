<?php
  require_once "header.php";
  require_once "sidebar.php";
?>

      <h1>Serviço #0<?php echo $_GET['idServico']; ?></h1>

      <br>

      <h2 class="bg-light my-4 p-3 shadow rounded">Informações do Cliente</h2>

        <?php
            require_once "process.php";

            $setSQL = consultaServico($_GET['idServico']);

            if (mysqli_num_rows($setSQL) == 0) {
              echo "
                  <div class=\"alert alert-danger\" role=\"alert\">
                      Serviço não encontrado!
                  </div>
              ";
            } else {
              while ($columnsValue = mysqli_fetch_assoc($setSQL)) {
                echo "

                    <p>Nome: <b>" . $columnsValue['cliente']. "</b></p>
                    <p>Telefone: <b>" . $columnsValue['telefone']. "</b></p>
                    <p>Endereço: <b>" . $columnsValue['local']. "</b></p>

                ";

        ?>

        <h2 class="bg-light my-4 p-3 shadow rounded">Informações do serviço</h2>


        <?php
            echo "

                <p>Serviço: <b>" . $columnsValue['servico']. "</b></p>
                <p>Data Agendada: <b>" . (new DateTime($columnsValue['data']))->format('d/m/Y H:i'). "</b></p>
                <p>Valor: <b>R$ " . number_format($columnsValue['valor'], '2', '.', ',') . "</b></p>
                <p>Situação do Serviço: <b>" . $columnsValue['status']. "</b></p>
                <p>Forma de Pagamento: <b>" . $columnsValue['pagamento']. "</b></p>


            ";
        }
    }



require_once "footer.php";

?>
