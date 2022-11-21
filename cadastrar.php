<?php

require_once('conexao.php');

$usuario=$_POST["usuario"];
$senha=$_POST["senha"];


try{
$criarUsuario=$connection->prepare('INSERT INTO usuario(nome,senha) VALUES(?,?)');
$criarUsuario->bindParam(1,$usuario);
$criarUsuario->bindParam(2,$senha);
$criarUsuario->execute();
header('location:tabelaUsuarios.php');
}catch(Exception $erro){
    throw $erro;
}

?>