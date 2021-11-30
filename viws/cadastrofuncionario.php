<?php
    include("header.php");
    include_once("../models/conexao.php");

    include_once("../models/bancousuarios.php");
?>  

<br>
<style>
.card-title{
   text-align: center;
   font-size: 100;
   font-style: arial;
   color: seagreen;
}
.tudo{
  background:seagreen;
}

label{
  text align: center;
}
</style>

  <div class="container m-5 p-5">
  <form action="cadastrofuncionario.php" method="POST">
    <div class="row mb-3">
      <label for="inputName" class="col-sm-2 col-form-label">Digite o código do Usuario: </label>
      <div class="col-sm-3">
        <input type="text" required name="codUsuario" class="form-control" id="inputCodigo">
      </div>
      <div class="col-sm-3">
        <button type="submit" class="btn btn-success">Buscar</button>
      </div>
    </div>
  </form>
</div>

    </tr>
  </thead>
  <tbody>

<?php 



$codUsuario = isset($_POST['codUsuario'])?$_POST['codUsuario']:0;
$codUsu= listadeusuariosCod($conexao,$codUsuario);

if($codUsu){

?>

<br>
<br>

<div class="tudo">
<div class="card w-75">
  <div class="card-body">
    <br>
    <h5 class="card-title"><b>CADASTRO FUNCIONÁRIO:</h5>
    <br>
    <form method="POST" action="../controllers/inserirfuncionario.php">
    <div class="card w-75 p-4">
    <p class="card-center">
    <p>Código: <input type="number" name="codUsuFK" value ="<?=$codUsu['codUsu']?>"></p>
    <p>Código Funcionário <input type="text" name="nomeFun"></p>
    <p>Nome: <input type="text" name="nomeFun"></p>
    <p>Função: <input type="text" name="funcaoFun"></p>
    <p>Data de Nascimento:  <input type="date" name="datanasFun"></p>
    <p>Telefone: <input type="text" name="foneFun"></p>
   <button type="submit" class="btn btn-success">Salvar</button>
</div>
</div>
<br>
<br>
</form>

<?php
}
include("footer.php");
?>