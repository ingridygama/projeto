<?php
session_start();
if (!$_SESSION["emailUsuario"]) {
  $_SESSION["msg"] = "<div class='alert alert-danger' role='alert'>Você não tem acesso a essa página.Cai Fora!!!!!!!!</div>";
  header("Location:../views/logar.php");
}
include_once("header.php");
include_once("../models/conexao.php");
include_once("../models/bancoCliente.php");

?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">Telefone</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Deletar</th>
      <th scope="col">Alterar</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $clientes = listaTudoClienteCod($conexao, $codCliente);
    foreach ($clientes as $cliente) :
    ?>
      <tr>
        <th scope="row"><?= $cliente['codCli'] ?></th>
        <td><?= $cliente['nomeCli'] ?></td>
        <td><?= $cliente['cpfCli'] ?></td>
        <td><?= $cliente['foneCli'] ?></td>
        <td><?= $cliente['datanascCli'] ?></td>
        <td>
          <form action="../controllers/deletarCliente.php" method="Post">
            <input type="hidden" name="codClientedeletar" value="<?= $cliente['codCli'] ?>">
            <button type="submit" class="btn-small btn-danger"> Deletar </button>
          </form>
        </td>
        <td>
          <form action="formAlterarClientes.php" method="Post">
            <input type="hidden" name="codClientealterar" value="<?= $cliente['codCli'] ?>">
            <button type="submit" class="btn-small btn-danger"> Alterar</button>
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
?>