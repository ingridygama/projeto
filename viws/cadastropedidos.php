<?php
session_start();
include_once("header.php");
include_once("../models/bancopedidos.php");
include_once("../models/conexao.php");
include_once("../models/bancofuncionario.php");
include_once("../models/bancoCliente.php");
include_once("../models/bancoJogos.php");

$codUsuFK = $_SESSION["codigoUsuario"];
$funcionario = listabuscafunUsu($conexao, $codUsuFK);
?>

<div class="container">

    <div class="row g-3">
        <div class="col-md-3">
            <label for="inputCodFun" class="form-label">Código</label>
            <input type="text" value="<?php echo ($funcionario["codFun"]) ?>" class="form-control" id="inputCodFun">
        </div>
        <div class="col-md-9">
            <label for="inputNomeFun" class="form-label">Funcionário</label>
            <input type="text" value="<?php echo ($funcionario["nomeFun"]) ?>" class="form-control" id="inputNomeFun">
        </div>

        <?php
        $codCliente = isset($_POST["codCliente"]) ? $_POST["codCliente"] : 0;
        
        $clientes = isset($codCliente) ? listadeclienteCod($conexao,$codCliente): "";
        $_SESSION["codigoCliente"] = isset($_POST["codCliente"]) ? $_POST["codCliente"] : "0";
        $_SESSION["nomeCliente"] = isset($clientes["nomeCli"]) ? $clientes["nomeCli"] : "";
        ?>
        <div class="col-md-3">
            <form method="POST" action="cadastropedidos.php">
                <label for="inputCodCli" class="form-label">Código do Cliente</label>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <input type="text" class="form-control" value="<?= $codCliente ?>" id="inputCodCli" required name="codCliente">
                    <button class="btn btn-primary me-md-2" type="submit">Buscar</button>
                </div>
            </form>
        </div>
        <?php
        $clientes = isset($codCliente) ? listaTudoClienteCod($conexao, $codCliente) : "";
        $_SESSION["codCli"] = isset($_POST["codCli"]) ? $_POST["codCliente"] : "0";
        ?>
        <div class="col-md-9">
            <label for="inputNomeCli" class="form-label">Cliente</label>
            <input type="text" class="form-control" value="<?= $_SESSION['nomeCliente'] ?>" id="inputNomeCli" required name="nomeCliente">
        </div>
        <?php
        $codJogo = isset($_POST["codJogo"]) ? $_POST["codJogo"] : 0;
        ?>
        <div class="col-md-3">
            <label for="inputCodJog" class="form-label">Código do Jogo</label>
            <form method="post" action="cadastropedidos.php">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <input type="text" class="form-control" value="<?= $codJogo ?>" id="inputCodJog" required name="codJogo">
                    <input type="hidden" value="<?= $_SESSION['codigoCliente'] ?>" name="codCliente">
                    <input type="hidden" value="<?= $_SESSION['nomeCliente'] ?>" name="nomeCliente">
                    <button class="btn btn-primary me-md-2" type="submit">Buscar</button>
                </div>
            </form>
        </div>
        <?php
        $jogos = isset($codJogo) ? listaTudoJogosCod($conexao, $codJogo) : "";
        $_SESSION["codigoJogo"] = isset($_POST['codJogo']) ? $_POST['codJogo'] : 0;
        $_SESSION["nomeJogo"] = isset($jogos['nomeJog']) ? $jogos['nomeJog'] : "";
        ?>

        <div class="col-md-4">
            <label for="inputNomeJog" class="form-label">Jogo</label>
            <input type="text" value="<?= $_SESSION["nomeJogo"] ?>" class="form-control" id="inputNomeJog">
        </div>
        <?php
        $_SESSION["precoJog"] = isset($jogos['precoJog']) ? $jogos['precoJog'] : "";
        ?>

        <div class="col-md-2">
            <label for="inputUnitario" class="form-label">Valor Total</label>
            <input type="text" class="form-control" value="<?= $_SESSION['precoJog'] ?>" id="inputUnitario">
        </div>
        <form method="Post" action="../controllers/inserirPedido.php">
            <input type="hidden" value="<?=$codJogo?>" name="codJogFK">
            <input type="hidden" value="<?= $_SESSION['codigoCliente'] ?>" name="codCliFK">
            <input type="hidden" value="<?php echo($funcionario["codFun"])?>" name="codFunFK">
            <input type="hidden" value="<?= $_SESSION['precoJog'] ?>" name="totalJogoPed">
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Confirmar</button>
        </form>
    </div>
</div>
<?php
include_once("footer.php");
?>