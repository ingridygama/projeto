<?php

include("../models/conexao.php");
include("../models/bancofuncionario.php");
include("../viws/header.php");


extract($_REQUEST,EXTR_OVERWRITE);

if(deletarfuncionario($conexao, $codfuncionariodeletar)){
echo("Funcionário deletado com SUCESSO.");
}else{
    echo("Cliente não deletado.");
}
include("../viws/footer.php");