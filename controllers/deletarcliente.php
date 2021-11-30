<?php

include("../models/conexao.php");
include("../models/bancoCliente.php");
include("../viws/header.php");


extract($_REQUEST,EXTR_OVERWRITE);

if(deletarcliente($conexao, $codclientedeletar)){
echo("Cliente deletado com SUCESSO.");
}else{
    echo("Cliente não deletado.");
}
include("../viws/footer.php");