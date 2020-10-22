<?php

echo "Usuario: ".$_POST['usuario']; //mostrar usuario

$user = $_POST['usuario'];

echo "<br>"; echo "<br>"; //pula linha

echo "Senha: ".$_POST['senha']; //mostrar senha

$password = $_POST['senha'];

echo "<br>"; echo "<br>";  //pula linha

if ($user == "etecia"){
    if($password == "etecia238"){
        echo "Autenticação  realizada  com sucesso";
    }else{
        echo "Você não tem permissão de visualizar essa página";
    }
}else{
    echo "Você não tem permissão de visualizar essa página";
    }
?>