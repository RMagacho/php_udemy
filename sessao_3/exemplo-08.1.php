<?php
/**
 * Diferenças:
 * Require - OBRIGA que o arquivo exista e esteja funcionando corretamente. Caso contrário, ERRO FATAL!
 * Include - TENTA funcionar mesmo se não existir o arquivo.
 *           Possui função de PATH configuravel no php.ini (recomendado para intranet)
 *           Include remoto - permite pegar um arquivo na internet.
 * 
 * require_once / include_once - traz uma vez o arquivo para evitar duplicatas
 */
// include "exemplo-08.php";
require "exemplo-08.php";

$resultado = soma (10, 20);

echo $resultado;

?>