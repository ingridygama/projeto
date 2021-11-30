<?php
session_start();
$email = isset($_SESSION["emailUsuario"])?$_SESSION["emailUsuario"]:null;
if($email != null){
  include_once("../viws/header.php");
}
?>
    
<br>
<style>
.card-title{
   text-align: center;
   font-size: 35;
   font-style: arial;
   color: seagreen;
}
.card-body{
 text align: center;
 padding: 100;
}
.card {
  color: seagreen;


}

</style>
<div class="container m-5 p-5">
  <div class="card-body">
    <br>
    <h5 class="card-title"><b>CADASTRO</h5>
    <br>
    <form method="POST" action="../controllers/inserirusuarios.php">
    <div class="card w-75 p-4">
    <p class="card-center">
    <p>Email: <input type="email" name="emailUsuarios"></p>
    <p>Senha: <input type= "password" name="senhaUsuarios"></p>
    <p>PIN: <input type= "text" name="pinUsu"></p>

  
   <button type="submit" class="btn btn-success">Salvar</button>
</div>
</div>
<br>
<br>
</form>

<?php
if ($email != null){
  include_once("../viws/footer.php");
}

?>