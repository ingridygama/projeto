<?php
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancofuncionario.php");
?>
<div class="container m-5 p-5">
<form action="listadeusuariosCod.php" method="GET">
<div class="row mb-3">
    <label for="inputCodigo" class="col-sm-2 col-form-label">Dígite o código do Funcionário</label>
    <div class="col-sm-3">
      <input type="number" required name="codFun" class="form-control" id="inputCodigo">
    </div>
    <div class="col-sm-3">
    <button type="submit" class="btn btn-success">Buscar</button>
    <br>
    <br>
    <br>
  </div>

</form>
</div>

<table class="table">
  <thead>
    <tr>
    <th scope="col">Código</th>
      <th scope="col">Código do Funcionário</th>
      <th scope="col">Nome</th>
      <th scope="col">Função</th>
       <th scope="col">Data Nascimento</th>
       <th scope="col">Telefone</th>
      <th scope="col">Deletar Usuário</th>
      <th scope="col">Alterar Usuário</th>
    </tr>
  </thead>
  <body>
<?php
$codFuncionario = isset($_GET['codFun'])?$_GET['codFun']:0;
if($codFuncionario > 0){
  $funcionarios = listadefuncionarioCod($conexao,$codFuncionario);
 

$funcionarios = listadefuncionarioCod($conexao,$codUsuario);
if ($funcionarios){
?>
    <tr>
      <th scope="row"><?=$funcionarios['codFun']?></th>
      <td><?=$funcionarios['nomeFun']?></td>
      <td><?=$funcionarios['funcaoFun']?></td>
      <td><?=$funcionarios['datanasFun']?></td>
      <td><?=$funcionarios['foneFun']?></td>
      <td>
      <form action="../controllers/deletarfuncionario.php.php" method="Post">
      <input type="hidden" name= "codfuncionariodeletar" value="<?=$funcionarios['codFun']?>">
       <button type="submit" class="btn btn-danger">Deletar</button>
      </form>
      </td>
      <td>
      <form action="../viws/formalterarusu.php" method="Post">
      <input type="hidden" name= "codusuarioalterar" value="<?=$funcionarios['codFun']?>">
       <button type="submit" class="btn btn-success">Alterar</button>
      </form>
      </td>
    </tr>
<?php
}
}
?>
  </tbody>
</table>


<!--  -->
<?php

include_once("footer.php");
?>