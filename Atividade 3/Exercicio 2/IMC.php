<?php

echo "Peso: ".$_GET['peso'];
$pe = $_GET['peso'];
echo "<br>";

echo "Altura: ".$_GET['altura'];
$alt = $_GET['altura'];
echo "<br>";

$IMC = $pe / ($alt * $alt);
echo "<br>";

if ($IMC > 25){
    echo "Você está acima do peso!!";
    echo "<br>";
    echo "E seu IMC é: " .$IMC;
}else{
    echo "Você está saudável!!";
    echo "<br>";
    echo "E seu IMC é: " .$IMC;
}

?>