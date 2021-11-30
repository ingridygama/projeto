<?php

include("../models/conexao.php");
include("../models/bancofuncionario.php");
include("../viws/header.php");


extract($_REQUEST,EXTR_OVERWRITE);

if(inserirfuncionario($conexao,$codUsuFK,$nomeFun,$funcaoFun,$foneFun,$datanasFun)){
echo("Funcionário cadastrado com SUCESSO."); 
   
}else{
    echo("Funcionário não cadastrado.");
}
include("../viws/footer.php");
?>
