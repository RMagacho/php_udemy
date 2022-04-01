<?php

    /**
     * Função sem nome e sem return
     */

    function test($callback) {

        // Processo lento

        $callback();
    }

    test(function(){
        echo "terminou";
    });

?>
