<?php

require_once('conexao.php');

$query = $connection->prepare("INSERT INTO usuario(id, nome) VALUES(1, 'oi')");

$query->execute();


?>