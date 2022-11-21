<?php
require_once('conexao.php');
$read=$connection->query('SELECT nome,senha FROM usuario');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>usuario</td><td>senha</td>
        </tr>
        <?php
while($row=$read->fetch(PDO::FETCH_OBJ)){
    echo "<tr><td>". $row->nome ."</td>";
    echo "<td>". $row->senha."</td></tr>";
}
        ?>
    </table>
</body>
</html>