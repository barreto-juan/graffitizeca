<?php
  require_once "header.php";
  require_once "sidebar.php";
?>

    <div class="container">

      <h1>Novo Serviço <i class="fa-solid fa-square-plus"></i></h1>

      <br>

      <form class="" action="" method="post">

        <div class="form-group">
          <label for="exampleFormControlTextarea1">Serviço</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" name="servico" rows="3" placeholder="Serviço" required></textarea>
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="exampleFormControlInput1">Cliente</label>
            <input class="form-control" id="exampleFormControlInput1" type="text" name="cliente" value="" placeholder="Cliente" required>
          </div>

          <div class="form-group col-md-6">
            <label for="exampleFormControlDate1">Data Agendada</label>
            <input class="form-control" id="exampleFormControlDate1" type="datetime-local" name="data" value="" required>
          </div>

        </div>

        <div class="form-group">
          <label for="exampleFormControlInput3">Local</label>
          <input class="form-control" id="exampleFormControlInput3" type="text" name="local" value="" placeholder="Local" required>
        </div>

        <div class="form-group">
          <label for="exampleFormControlInput4">Telefone</label>
          <input class="form-control" id="exampleFormControlInput4" type="text" name="telefone" value="" placeholder="Telefone" required>
        </div>

        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="exampleFormControlInput2">Valor</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">R$</div>
              </div>
              <input class="form-control" id="exampleFormControlInput2" type="text" name="valor" value="99.99" required>
            </div>
          </div>

          <div class="form-group col-md-4">
            <label for="exampleFormControlSelect2">Situação</label>
            <select class="custom-select" id="exampleFormControlSelect2" name="status" required>
              <option value="Aguardando">Aguardando</option>
              <option value="Em andamento">Em andamento</option>
              <option value="Feito">Feito</option>
            </select>
          </div>

          <div class="form-group col-md-4">
            <label class="formRadioLabel">Forma de Pagamento</label>

            <div class="methods border rounded bg-light p-3">

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pagamento" id="inlineRadio1" value="Dinheiro">
                <label class="form-check-label" for="inlineRadio1"><i class="fa-solid fa-money-bill-wave"></i> Dinheiro</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pagamento" id="inlineRadio2" value="Cartão">
                <label class="form-check-label" for="inlineRadio2"><i class="fa-solid fa-credit-card"></i> Cartão</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pagamento" id="inlineRadio3" value="Pix">
                <label class="form-check-label" for="inlineRadio3"><i class="fa-brands fa-pix"></i> Pix</label>
              </div>

            </div>

          </div>



        </div>

        <button class="btn btn-success" type="submit" name="button">Salvar</button>

      </form>

    </div>

<?php require_once "footer.php";



if (isset($_POST['button'])) {

  require_once "process.php";

  $getCliente = $_POST['cliente'];
  $getServico = $_POST['servico'];
  $getData = $_POST['data'];
  $getLocal = $_POST['local'];
  $getFone = $_POST['telefone'];
  $getValor = $_POST['valor'];
  $getStatus = $_POST['status'];
  $getPagamento = $_POST['pagamento'];

  novoServico($getCliente, $getServico, $getData, $getLocal, $getFone, $getValor, $getStatus, $getPagamento);

  if($setSQL && mysqli_affected_rows($getConnection) == 0){
    echo "<script> alert(\"Falha ao agendar serviço!\") </script>";
    header("refresh");
    exit;
  } elseif($setSQL && mysqli_affected_rows($getConnection) > 0) {
    echo "<script> alert(\"Serviço agendado com sucesso!!!\") </script>";
    header("refresh");
    exit;
  }

}

?>
