<?php
$porta="localhost:3308";
$nomeDoBanco="teste1";
$usuarioDoBanco="root";
$senhaDoBanco="";

$connection=new PDO("mysql:host=$porta;dbname=$nomeDoBanco","$usuarioDoBanco","$senhaDoBanco");


?>