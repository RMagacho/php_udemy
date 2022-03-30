<?php

$nome = "Raí";
$sobrenome = "Magacho";

$nomeCompleto = $nome." ".$sobrenome; // Conversão de tipo é automática. Usamos o ponto(.) para concatenar variáveis.
echo $nomeCompleto;

// Uma boa pratica é apagar uma variável de uso para limpar a variável
unset($nome);

if (isset($nome)) {  // verifica existência de dados na variável.
    echo $nome;
}
?>