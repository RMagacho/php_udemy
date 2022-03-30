<?php
$qualSuaIdade = 10;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;
if ($qualSuaIdade < $idadeCrianca) {

    echo "Criança";
}elseif ($qualSuaIdade < $idadeMaior) {
    echo "Adolescente";
} elseif($qualSuaIdade < $idadeMaior) {
    echo "Adulto";
} else {
    echo "Idoso";
}

// Operador Ternário - Só funciona para condição simples
echo "<br>";
echo ($qualSuaIdade < $idadeMaior)?"Menor Idade":"Maior Idade";
?>