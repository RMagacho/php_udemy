<?php

    // define para definir (CONVENÇÃO de usar apenas maiuscula)
    // defined para verificar se foi definida
    // definir se ela é case sensitive ou insensitive

    define("SERVIDOR", "127.0.0.1");

    echo SERVIDOR;

    echo "<br>";

    define("BANCO_DE_DADOS",[
        '127.0.0.1',
        'root',
        'password',
        'db_test'
    ]);

    print_r(BANCO_DE_DADOS);
?>