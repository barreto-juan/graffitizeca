<?php
  require_once "header.php";
  require_once "sidebar.php";
?>

      <h1>Central de Serviços <i class="fa-solid fa-clipboard-list"></i></h1>

      <br>

      <a class="" href="create.php">
        <button class="btn btn-primary" type="button" name="button"><i class="fa-solid fa-plus"></i> Agendar Novo Serviço</button>
      </a>


      <table class="table table-hover mt-4">
        <thead>
          <tr>
            <th>#</th>
            <th>Cliente</th>
            <th>Local</th>
            <th>Telefone</th>
            <th>Situação</th>
            <th>Ação sobre Serviço</th>
          </tr>
        </thead>

        <tbody>
          <?php

            require_once "process.php";

            $setSQL = retornaServicos();

            if (mysqli_num_rows($setSQL) == 0) {
              echo "
                <tr>
                  <td>
                    Nenhum serviço
                  </td>
                </tr>
              ";
            } else {
              while ($columnsValue = mysqli_fetch_assoc($setSQL)) {
                echo "
                  <tr>
                    <th>
                      #0" . $columnsValue['id'] . "
                    </th>

                    <td>
                      " . $columnsValue['cliente'] . "
                    </td>

                    <td>
                      " . $columnsValue['local'] . "
                    </td>

                    <td>
                      " . $columnsValue['telefone'] . "
                    </td>

                    <td>
                      " . $columnsValue['status'] . "
                    </td>

                    <td class=\"d-flex\">
                      <form action=\"details.php\" method=\"get\">
                        <button class=\"btn btn-warning\" type=\"submit\" name=\"idServico\" value=" . $columnsValue['id'] . " title=\"Detalhes\"><i class=\"fa-solid fa-circle-info\"></i></button>
                      </form>

                      <span class=\"mx-1\"></span>

                      <form action=\"edit.php\" method=\"get\">
                        <button class=\"btn btn-success\" type=\"submit\" name=\"idServico\" value=" . $columnsValue['id'] . " title=\"Editar\"><i class=\"fa-solid fa-edit\"></i></button>
                      </form>

                      <span class=\"mx-1\"></span>

                      <form action=\"delete.php\" method=\"get\">
                        <button class=\"btn btn-danger\" type=\"submit\" name=\"idServico\" value=" . $columnsValue['id'] . " title=\"Excluir\"><i class=\"fa-solid fa-trash-can\"></i></button>
                      </form>

                    </td>
                  </tr>

                ";
              }
            }



          ?>



        </tbody>
      </table>

<?php require_once "footer.php" ?>
