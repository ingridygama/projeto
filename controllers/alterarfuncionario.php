<?php


include("../models/conexao.php");
include("../models/bancofuncionario.php");
include("../viws/header.php");


extract($_REQUEST,EXTR_OVERWRITE);

if(alterarfuncionario($conexao,$nomeFun,$codUsuFK,$funcaoFun,$foneFun,$datanasFun){
echo("Funcionário alterado com SUCESSO");
}else{
    echo("Funcionário não alterado.");
}
include("../viws/footer.php");