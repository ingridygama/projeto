<?php
session_start();
if (!$_SESSION["emailUsuario"]){
    $_SESSION["msg"] ="<div class='alert alert-danger' role='alert'>Voce não tem acesso a está página</div>";
    header("Location:../viws/logar.php");
}
include_once ("header.php");
?>

<img src="img/gamers (1).gif" width=100% style="padding-top:7px">


<?php
include_once ("footer.php");
?> 