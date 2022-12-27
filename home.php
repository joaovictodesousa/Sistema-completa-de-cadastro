<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JvS</title>
    <style>
        
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 62%, rgba(0,212,255,1) 100%);
            text-align: center;
            color: white;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0,0,0,0.6); 
            padding: 30px;
            border-radius: 10px;
        }
        a{
            text-decoration: none; /*tirar a linha de baixo do link*/       
            color: white;
            border: 3px solid dodgerblue; /*fazer uma bordinha colorida em volta*/
            border-radius: 10px;
            padding: 10px;
        }
        a:hover{
            background-color: dodgerblue;
        }
    </style>
</head>
<body>
    <h1>Para onde quer ir?</h1>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="index.php">Cadastre-se</a>
    </div>
</body>
</html>