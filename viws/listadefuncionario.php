<?php

include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancofuncionario.php");
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Código do Funcionário</th>
      <th scope="col">Nome</th>
      <th scope="col">Função</th>
       <th scope="col">Data Nascimento</th>
       <th scope="col">Telefone</th>
      <th scope="col">Deletar</th>
      <th scope="col">Alterar</th>
    </tr>
  </thead>
  <tbody>
<?php

$funcionarios = listafuncionario ($conexao);
foreach($funcionarios as $funcionario):

?>
    <tr>
      <th scope="row"><?=$funcionario['codFun']?></th>
      <td><?=$funcionario['codUsuFK']?></td>
      <td><?=$funcionario['nomeFun']?></td>
      <td><?=$funcionario['funcaoFun']?></td>
      <td><?=$funcionario['datanasFun']?></td>
      <td><?=$funcionario['foneFun']?></td>
      <td>
      <form action="../controllers/deletarfuncionario.php" method="Post">
      <input type="hidden" name= "codfuncionariodeletar" value="<?=$funcionario['codFun']?>">
       <button type="submit" class="btn btn-danger">Deletar</button>
      </form>
      </td>
      <td>
      <form action="../viws/formalterarfuncionario.php" method="Post">
      <input type="hidden" name= "codfuncionarioalterar" value="<?=$funcionario['codFun']?>">
       <button type="submit" class="btn btn-success">Alterar</button>
      </form>
      </td>
    </tr>
    
<?php
endforeach;
?>
  </tbody>
</table>
<?php
include_once("footer.php");

