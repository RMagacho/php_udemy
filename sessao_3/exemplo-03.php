<?php
/**Tipos básicos de variáveis auto explicativas */

/**string */
$nome = "RAI";
$email = "rai.magacho@uerj.br";

echo $nome . '<br>' . $email . '<br>';
/**integer */
$ano = 2021;
echo $ano . '<br>';

/**number */
$salario = 3150.00;
echo $salario . '<br>';

/**boolean */
$verdadeiro = false;
echo $verdadeiro . '<br>';

/**array */
$frutas = array("abacaxi", "laranja", "morango");
echo $frutas[2] . '<br>';

/**object */
$nascimento = new DateTime();
var_dump($nascimento);

/**resouce  */
$arquivo = fopen("exemplo-03.php", "r");
var_dump($arquivo);

/**nulo é ausência de valor */
$nulo = null;
/**vazio não tem informação MAS foi iniciado*/
$vazio = "";

var_dump($nulo);
var_dump($vazio);
?>