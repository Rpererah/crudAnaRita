<?php

require_once('conexao.php');

// $query=$connection->prepare('UPDATE usuario SET nome="teste" WHERE id=1');

// $query->execute();

// $query=$connection->prepare('UPDATE usuario SET nome="teste" WHERE id=1');
// $query->execute();


//pega o indices quem tem guardado no get,ou seja nosso parametro
$listaindice=array_keys($_GET);
//exibe na primeira posição o id guardado
$indice=$listaindice[0];
$usuario=$_POST["usuario"];
$senha=$_POST["senha"];
$query=$connection->prepare("UPDATE usuario SET nome='{$usuario}',senha='{$senha}' WHERE id='{$indice}'");
$query->execute();
header('location:tabelaUsuarios.php');

