<?php
function cadastrousuario($conexao,$emailUsuarios,$senhaUsuarios, $pinUsu){
    $option = ['cost' => 8];
    $senhacrypto = password_hash($senhaUsuarios, PASSWORD_BCRYPT, $option);
    $query="insert into tbusuario(emailUsu,senhaUsu,pinUsu)values('{$emailUsuarios}','{$senhacrypto}','{$pinUsu}')";
    
    $resultados = mysqli_query($conexao,$query);
    return $resultados;
    }

function listadeusuarios($conexao){
        $query = "Select * From tbusuario";
    
        $resultados = mysqli_query($conexao,$query);
        return $resultados;
    }

function deletarusuarios($conexao, $codUsuario){
        $query="delete from tbusuario where codUsu = $codUsuario";
        $resultados = mysqli_query($conexao,$query);
        return $resultados;
    }

function alterarUsuarios($conexao,$codUsu,$emailUsu,$senhaUsu,$pinUsu){
    $option = ['cost' => 8];
    $senhaUsu = password_hash($senhaUsu, PASSWORD_BCRYPT, $option);
        $query= "update tbusuario set emailUsu= '{$emailUsu}', senhaUsu= '{$senhaUsu}', pinUsu= '{$pinUsu}' where codUsu = '{$codUsu}'";
        $resultados = mysqli_query ($conexao, $query);
        return $resultados;
        }
          

        function listadeusuariosCod($conexao,$codUsuario){
            $query = "Select * from tbusuario where codUsu={$codUsuario}";
            $resultados = mysqli_query($conexao,$query);
            $resul = mysqli_fetch_array($resultados);
            return $resul;
         }

         function buscarAcesso($conexao,$email,$senha){
             $query ="select * from tbusuario where emailUsu='{$email}'";
             $resultados = mysqli_query($conexao,$query);

             if(mysqli_num_rows($resultados)> 0){ 
                 $linha = mysqli_fetch_assoc($resultados);

                     if(password_verify ($senha,$linha["senhaUsu"])){
                     $_SESSION["emailUsuario"] = $linha ["emailUsu"];
                     $_SESSION["codigoUsuario"] = $linha ["codUsu"];

                     return $linha['emailUsu'];
                     }else{
                         return "Senha não confere";
                     }
                    }else{
                        return "Email não cadastrado";
                    }
                     
                 }

                 function sairSistemas(){
                     session_destroy();
                     $_SESSION["msg"] ="<div class='alert alert-danger' role='alert'>Sua sessão acaba de ser expirada</div>";
                     header("Location:../viws/logar.php");
                 }

        


?>

