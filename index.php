<?php

require 'connection.php';

$connection = new Connection();

$users = $connection->query("SELECT * FROM users");

echo "<table border='1'>

    <tr>
        <th>ID</th>    
        <th>Nome</th>    
        <th>Email</th>
        <th>Ação</th>    
    </tr>
";


$id = $_POST["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];

include_once 'conexao.php';

$sql = "insert into cliente values(null,
        '".$nome."','".$email."','".$id."')";
echo $sql;

if($users($sql,$con)){
    $msg = "Gravado com sucesso!";
}else{
    $msg = "Erro ao gravar!";
}
$users($con);


foreach($users as $user) {

    echo sprintf("<tr>
                      <td>%s</td>
                      <td>%s</td>
                      <td>%s</td>
                      <td>
                           <a href='#'>Editar</a>
                           <a href='#'>Excluir</a>
                      </td>
                   </tr>",
        $user->id, $user->name, $user->email);

}

echo "</table>";