<?php
function inserirCliente($conexao,$codigoUsuFk,$nomeCli,$cpfCli,$foneCli,$datanasCli){
   
    $query="insert into tbclientes(codUsuFK,nomeCli,cpfCli,foneCli,datanasCli)values('{$codigoUsuFk}','{$nomeCli}','{$cpfCli}','{$foneCli}','{$datanasCli}')";
    
    $resultados = mysqli_query($conexao,$query);
    return $resultados;
    }

function listadecliente($conexao){
        $query = "Select * From tbclientes";
    
        $resultados = mysqli_query($conexao,$query);
        return $resultados;
    }

function deletarcliente($conexao, $codCli){
        $query="delete from tbclientes where codCli = $codCli";
        $resultados = mysqli_query($conexao,$query);
        return $resultados;
    }

function alterarcliente($conexao,$codCli,$nomeCli, $cpfCli,$foneCli,$datanasCli){
        $query= "update tbclientes set codCli= '{$codCli}', nomeCli = '{$nomeCli}', cpfCli ='{$cpfCli}', foneCli = '{$foneCli}', datanasCli = '{$datanasCli}' where codCli = '{$codCli}'";
        $resultados = mysqli_query ($conexao, $query);
        return $resultados;
        }
          

        function listadeclienteCod($conexao,$codCliente){
            $query = "Select * from tbclientes where codCli = $codCliente";
            $resultados = mysqli_query($conexao,$query);
            $resul = mysqli_fetch_array($resultados);
            return $resul;
         }


         function listaTudoClienteCod($conexao,$nomeCliente){
         $query = "select * form tbclientes where nomeCli like = '%{$nomeCliente}%'";
         $resultados = mysqli_query($conexao,$query);
         return $resultados;
         }

    
?>
