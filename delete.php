<?php

require_once('conexao.php');

//pega o indices quem tem guardado no get,ou seja nosso parametro
$listaindice=array_keys($_GET);
//exibe na primeira posição o id guardado
$indice=$listaindice[0];

$query=$connection->prepare("DELETE FROM usuario WHERE id ='{$indice}'");

$query->execute();
header('location:tabelaUsuarios.php');