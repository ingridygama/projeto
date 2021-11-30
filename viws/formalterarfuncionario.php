<?php
  include_once("header.php");
  include_once("../models/conexao.php");
  include_once("../models/bancofuncionario.php");

?>
    <form method="POST" action="../controllers/alterarfuncionario.php">

<?php
$funcionario = $_POST["codfuncionarioalterar"];
$codfuncionario = listatudofuncionario ($conexao,$codFun);

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
    <h5 class="card-title"><b>Modificar Funcionário</h5>
    <div class="card w-75 p-4">
    <p class="card-center"> 
    <form action="../controllers/alterarfuncionario.php" method="POST">
    <p>Código: <input type="text" name="codFun" value="<?=$codfuncionario['codFun']?>"></p>
    <p>Código Funcionário:<input type="text" name="codUsuFK" value="<?=$codfuncionario['codUsuFK']?>"></p>
    <p>Nome: <input type="text" name="nomeFun" value="<?=$codfuncionario['nomeFun']?>"></p>
    <p>Função: <input type= "text" name="funcaoFun" value="<?=$codfuncionario['funcaoFun']?>"></p>
    <p>Data Nascimento:<input type= "date" name="datanasFun" value="<?=$codfuncionario['datanasFun']?>"></p>
    <p>Telefone: <input type= "text" name="foneFun" value="<?=$codfuncionario['foneFun']?>"></p>
    
 
    <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>
</div>
</form>


<?php
include("footer.php");
?>