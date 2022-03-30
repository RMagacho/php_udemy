<?php

    $condicao = true;

    while ($condicao) {
        $numero = rand(1, 100);

        if ($numero > 90) $condicao = false;

        echo $numero . "<br>";
    }

?>