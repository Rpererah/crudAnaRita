<?php

require_once('conexao.php');

$read=$connection->query('SELECT id,nome FROM usuario');
while($row=$read->fetch(PDO::FETCH_OBJ)){
    echo $row->id."<br/>";
    echo $row->nome."<br/>";

}

?>