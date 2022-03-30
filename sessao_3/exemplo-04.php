<?php
/** Variáveis pré-definidas ou super globais */

$nome = $_GET["a"]; // GET ou POST sempre retornará a informação como STRING
$nome2 = (int)$_GET["b"]; // força a conversão de dados para inteiro

var_dump($_SERVER);

?>