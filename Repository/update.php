<?php

    $nome = $_POST["nome"];
    $email = $_POST["email"];

    include_once 'conexao.php';

    $sql = "update cliente set
            nome = '".$nome."', email = '".$email."'
            where idcliente = ".$id;

    if(mysql_query($sql,$con)){
        $msg = "Atualizado com sucesso!";
    }else{
        $msg = "Erro ao atualizar!";
    }
    mysql_close($con);

    ?>