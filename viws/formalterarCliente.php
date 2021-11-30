<?php
  include_once("header.php");
  include_once("../models/conexao.php");
  include_once("../models/bancoCliente.php");

?>
    <form method="POST" action="../controllers/alterarcliente.php">

<?php
$codCliente = $_POST["codclientealterar"];
$cliente = listadeclienteCod ($conexao,$codCliente);

?>

<br>
<style>
.card-title{
   text-align: center;
}
.tudo{
  background:seagreen;
}

</style>
<div class="tudo">
<div class="card w-75">
  <div class="card-body">
    <h5 class="card-title"><b>Modificar Cliente</h5>
    <div class="card w-75 p-4">
    <p class="card-center"> 
    <form action="../controllers/alterarcliente.php" method="POST">
    <p>Código<input type="text" name="codCli" value="<?=$cliente['codCli']?>"></p>
    <p>Nome:<input type="text" name="nomeCli" value="<?=$cliente['nomeCli']?>"></p>
    <p>CPF:<input type= "text" name="cpfCli" value="<?=$cliente['cpfCli']?>"></p>
    <p>Data Nascimento:<input type= "date" name="datanasCli" value="<?=$cliente['datanasCli']?>"></p>
    <p>Telefone: <input type= "text" name="foneCli" value="<?=$cliente['foneCli']?>"></p>
    
 
    <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>
</div>
</form>


<?php
include("footer.php");
?>