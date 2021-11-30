<?php


include("../models/conexao.php");
include("../models/bancoCliente.php");
include("../viws/header.php");


extract($_REQUEST,EXTR_OVERWRITE);

if(alterarcliente($conexao,$codCli,$nomeCli, $cpfCli,$foneCli,$datanasCli)){
echo("Cliente alterado com SUCESSO");
}else{
    echo("Cliente não alterado.");
}
include("../viws/footer.php");