<?php

// Função precisa retornar algum valor
// Função sem retornar valor é chamado de Função de Rotina

/**
 * Parâmetros ou Argumento - Informações necessárias para uma função funcionar.
 */

function ola($texto, $periodo = "Boa Tarde") {  /** Os valores definidos como OBRIGATÓRIOS devem estar na ESQUERDA */
    return "Olá $texto! $periodo <br>";
}

echo ola("");
echo ola("Raí", "Boa Sorte");

function func() {

    $argumentos = func_get_args();
    return $argumentos;
}
var_dump(func("Bom dia", 10, "coisa doida"));
