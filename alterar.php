<?php
require_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<body>
<?php
//pega o indices quem tem guardado no get,ou seja nosso parametro
$listaindice=array_keys($_GET);
//exibe na primeira posição o id guardado
$indice=$listaindice[0];

$read=$connection->query("SELECT id,nome FROM usuario WHERE id={$indice}");
while($row=$read->fetch(PDO::FETCH_OBJ)){
    
    $usuario=$row->nome;

}
?>
<div class="container m-5  p-3">
<form action="update.php?<?=$indice?>" method="post">

    <div class="mb-3">
        <label for="usuario" class="form-label">Usuario</label>
        <input type="text" class="form-control" id="usuario" name="usuario" value="<?=$usuario?>">
    </div>
    <div class="mb-3">
        <label for="usuario" class="form-label">Senha</label>
        <input type="password" class="form-control" id="senha" name="senha" placeholder="Nova Senha">
    </div>
    <button class="btn btn-warning" type="submit">Atualizar</button>
</form>
</div>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>