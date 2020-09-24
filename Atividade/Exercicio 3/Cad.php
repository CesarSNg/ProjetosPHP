<?php

echo "Usuario: ".$_POST['user'];
$us = $_POST['user'];
echo "<br>";

echo "Senha: ".$_POST['senha'];
$se = $_POST['senha'];
echo "<br>";

if ($us = "etecia"){
    if ($se = "etecia238"){
        echo "Autenticação  realizada  com  sucesso";
    }
}else{
    echo "Você não tem permissão de visualizar essa página";
}

?>