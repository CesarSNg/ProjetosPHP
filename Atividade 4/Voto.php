<?php

echo "Voto: ".$_GET['Voto'];
echo "<br><br>";

    $voto = $_GET['Voto'];

    if (!isset($_COOKIE['Voto'])) {
        setcookie ("Voto", $voto, time()+(3600*24));

        $msg =  "Obrigado por votar!!";
    }else {
        $msg = "Você já votou uma vez!";
    }

    echo $msg;
?>
