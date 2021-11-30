<?php
function inserirfuncionario($conexao,$codUsuFK,$nomeFun,$funcaoFun,$foneFun,$datanasFun){
    $query="insert into tbfuncionarios (codUsuFK,nomeFun,funcaoFun,foneFun,datanasFun)values('{$codUsuFK}','{$nomeFun}','{$funcaoFun}','{$foneFun}','{$datanasFun}')";
    
    $resultados = mysqli_query($conexao,$query);
    return $resultados;
    }

function listafuncionario($conexao){
        $query = "Select * From tbfuncionarios";
    
        $resultados = mysqli_query($conexao,$query);
        return $resultados;
    }

function deletarfuncionario($conexao, $codFun){
        $query="delete from tbfuncionarios where codFun = $codFun";
        $resultados = mysqli_query($conexao,$query);
        return $resultados;
    }

function alterarfuncionario($conexao,$nomeFun,$funcaoFun,$foneFun,$datanasFun){
        $query= "update tbfuncionarios set codFun= '{$codFun}', nomeFun = '{$nomeFun}', funcaoFun ='{$funcaoFun}', foneFun = '{$foneFun}' where datanasFun = '{$datanasFun}' ";
        $resultados = mysqli_query ($conexao, $query);
        return $resultados;
        }
          

        function listadefuncionarioCod($conexao,$codFuncionario){
            $query = "Select * from tbfuncionarios where codFun = $codCliente";
            $resultados = mysqli_query($conexao,$query);
            $resul = mysqli_fetch_array($resultados);
            return $resul;
         }


         function listatudofuncionario($conexao,$nomeFuncionario){
         $query = "select * from tbfuncionarios where nomeFun like = '%{$nomeFuncionario}%'";
         $resultados = mysqli_query($conexao,$query);
         return $resultados;
         }
    
         function listabuscafunUsu($conexao,$codUsuFK){
            $query = "select * from tbfuncionarios where codUsuFK = '{$codUsuFK}'";
            $resultados = mysqli_query($conexao,$query);
            $resul= mysqli_fetch_array($resultados);
            
            return $resul;

            }

?>


