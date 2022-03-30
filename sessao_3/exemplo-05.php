<?php

/**
 * Escopo de variável = Até onde sua variável será vista
 * */



function teste() 
{
   
    global $nome; //Uso da variável definida fora do escopo para usar dentro dessa função.
    $nome = "Raí";

}

teste();
echo $nome;
?>

