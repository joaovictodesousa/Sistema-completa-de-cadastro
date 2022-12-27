<?php
    session_start();
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = ($_SESSION['email']);
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>JvS</title>
    <style>
        body{
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 62%, rgba(0,212,255,1) 100%);
            color: white; 
            text-align: center;
        }
        h1{
            color: white;
            text-align: center;

        }
        .container{
            background-color: black;
        }
        h6{
            color: white;
        }
    </style>
</head>
<body>
<nav class="navbar bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <h6>JvS</h6>
      <a href="Sair.php"><button style="background: red; border-radius: 5px; padding: 10px; cursor: pointer; color: #fff; border: none; font-size: 16px;"> Sair </button></a>
    </a>
  </div>
</nav>
<br>
<?php
    echo "<h5>Bem vindo <u>$logado</u></h5>"
?>
</body>
</html>