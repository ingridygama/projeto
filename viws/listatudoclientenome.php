<?php
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoCliente.php");
?>
<div class="container m-5 p-5">

<div class="row mb-3">
<form action="../viws/listatudoclientenome.php" method="GET">
<br>
    <label for="inputNome" class="col-sm-2 col-form-label">Dígite o nome do usuário:</label>
    <div class="col-sm-3">
      <input type="text" required name="NomeCliente" class="form-control" id="inputNome">
    </div>
    <div class="col-sm-3">
    <br>
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
      <th scope="col">Código Usuário</th>
      <th scope="col">Cliente</th>
      <th scope="col">CPF</th>
      <th scope="col">Data Nascimento</th>
      <th scope="col">Telefone</th>
      <th scope="col">Deletar</th>
      <th scope="col">Alterar</th>
    </tr>
  </thead>
  <tbody>
<?php
$nomeCliente = isset ($_GET['nomeCliente'])?$_GET['nomeCliente']: "";

if($nomeCliente !=""){
  $cliente = listatudoclientenome ($conexao,$nomeCliente);
  if ($cliente){
   
    foreach ($cliente as $clientes):
 
 
?>
    <tr>
      <th scope="row"><?=$clientes['codCli']?></th>
      <td><?=$clientes['codusuFK']?></td>
      <td><?=$clientes['nomeCli']?></td>
      <td><?=$clientes['cpfCli']?></td>
      <td><?=$clientes['foneCli']?></td>
      <td><?=$clientes['datanasCli']?></td>
      <td>
      <form action="../controllers/deletarcliente.php" method="Post">
      <input type="hidden" name= "codClientedeletar" value="<?=$clientes['codCli']?>">
       <button type="submit" class="btn btn-danger">Deletar</button>
      </form>
      </td>
      <td>
      <form action="../viws/alterarcliente.php" method="Post">
      <input type="hidden" name= "codClientealterar" value="<?=$clientes['codCli']?>">
       <button type="submit" class="btn btn-success">Alterar</button>
      </form>
      </td>
    </tr>
<?php
endforeach;

}
}

?>

  </tbody>
</table>


<?php

include_once("footer.php");
?>