<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>

<br>
<div class="container">
    <?php
    session_start();
    $msg = isset($_SESSION["msg"]) ? $_SESSION["msg"] : "";
    ?>
    <div class="mb-3">
<form class="formlogin" action="../controllers/credenciais.php" method="post">
<?php
echo ($msg);
?>
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Email </label>
    <input type="email" name= "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Obrigatorio /@/ e o /.com/</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input type="password" name="senha"class="form-control" id="exampleInputPassword1">
  </div>
 
  <a class="btn btn-outline-success" href="../viws/cadastrousuarios.php" role="button">Cadastrar</a>
  <button type="submit" class="btn btn-outline-success">Logar</button>
</form>
  </div>
</div>
</body>
</html>
