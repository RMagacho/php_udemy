<?php

    /**
     * Diferença entra passagem de parâmetros e por referência
     */

    $a = $b = 10;
    function trocaValor($a) {   /* Passagem de parâmetro por valor */
        $a += 50;               /* O que acontece dentro da função, fica dentro da função... */
        return $a;              /* logo, o valor $a recebe 10 + 50 resulta em 60, mas continua valendo 10. */
    }

    echo trocaValor($a);
    echo "<br>";
    echo $a;
    echo "<br>";
     echo "---------------------------------------------------------<br>";

    function trocaValor2(&$b) {   /* Passagem de parâmetro por referência, usa-se um & antes da variável */
        $b += 50;               /* O valor do endereço da memória é alterado */
        return $b;
    }

    echo trocaValor2($b);
    echo "<br>";
    echo "\$a = $a e \$b = $b";
    echo "<br>---------------------------------------------------------<br>";

    $pessoa = array(
        'nome' => 'Raí',
        'idade' => 34
    );

    foreach ($pessoa as $value) {

        if (gettype($value) === 'integer') $value +=10;
        echo $value.'<br>';
    }

    print_r($pessoa);
    print_r($value);
?>
