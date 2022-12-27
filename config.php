<?php

    $dbHost = 'Localhost' ;
    $dbUsername = 'root' ;
    $dbPassword = '' ;
    $dbName = 'funcionarios' ;

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if($conexao->connect_errno)
    // {
    // echo "Erro";
    // }
    // senão
    // {
    // echo "Conexão realizada com sucesso";
    // }

?>