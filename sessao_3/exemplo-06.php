<?php

/**Operadores */

// de String (igual e ponto)
$nome = "vscode";
$nomeComposto = "vscode" . " " . "windows";

// de Atribuição (composto .=)
echo $nome . "<br>";
$nome .= "pulou";

echo $nome;
////////////////////////////////////////////////

/** Aritiméticos
 *  + - adição
 *  - - subtração
 *  * - multiplicação
 *  / - subtração fracionada
 *  % - resto da divisão ou módulo
 *  ** - exponenciação
 */

echo "<br>";
////////////////////////////////////////////////

/**Comparação
 *  =   atribuição
 *  ==  comparação apenas de valor
 *  === comparação de valor e tipo (identidade)
 *  !=  não é igual
 *  !== não é igual e de mesmo tipo
 *  <=> spaceship - comparação MENOR IGUAL MAIOR retornando -1 0 1
 *  ??  null coalescing - equivale ao if else, pulando variáveis de valor NULL
 */

 /**Incrementação
  * ++  aumenta uma unidade, seja antes da variável ou depois
    --  reduz uma unidade, seja antes da variável ou depois
  */

/**Precedência de operadores
 *  &&  e
 *  ||  ou
 */

?>