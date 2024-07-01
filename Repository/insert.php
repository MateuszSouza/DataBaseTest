<?php
   
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    include_once 'conexao.php';

    $sql = "insert into cliente (nome, email)
     values('".$nome."','".$email."')";
    //echo $sql;

    if(mysql_query($sql,$con)){
        $msg = "Gravado com sucesso!";
    }else{
        $msg = "Erro ao gravar!";
    }
    mysql_close($con);

 

?>