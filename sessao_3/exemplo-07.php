<?php

function pula() {
    echo "<br>";
}
/** Interpolação de variável*/

$nome = "raí";
$nome2 = "magacho";

echo "$nome $nome2<br>"; // Com aspas, existe uma verificação no código e caso exista uma variável, ela mostra o valor da mesma.
echo '$nome $nome2<br>'; // Tudo é texto.



/**Strings */
$nomeMin = "raí";
echo "$nomeMin <br>";
$nomeMai = "MAGACHO";

echo strtoupper($nomeMin); // transforma a string em letras maiúsculas (não funciona com caracteres com acento)
echo "<br>";
echo strtolower($nomeMai); // transforma a string em letras minúsculas
echo "<br>";
pula();

echo ucfirst("$nome $nome2"); // transforma apenas a primeira letra de todo texto em maiúsculo (parágrafo)
pula();
echo ucwords("$nome $nome2"); // Transforma a primeira letra de todas as palavras em maiúsculo
pula();

$nome = str_replace("í", "i", $nome); // Troca o 1° pelo 2° na varíavel 3°
echo $nome;
pula();
pula();

$lorem = "Exercitation nisi ex dolore non duis adipisicing pariatur Rockman fugiat. Esse dolore cupidatat veniam laboris consequat elit in dolor. Ex mollit voluptate nostrud Lorem sit ut in. Incididunt laboris qui aliqua eu eiusmod eu esse duis consequat enim sint. Ea duis eu adipisicing sunt ut cupidatat ex irure. Nisi officia adipisicing cupidatat qui in ex Lorem deserunt sint qui. Laborum nulla id culpa voluptate cillum nostrud do.Culpa excepteur minim ex esse sint minim consequat culpa ad dolore deserunt. In sunt eu eu quis ex Lorem sunt labore labore mollit. Megaman Ipsum non quis deserunt qui et id nulla ea.";

$procura = strpos($lorem, "Rockman"); // retorna, em número, a posição que a palavra se encontra no texto
echo $procura;
pula();
$quantidade = strlen("Rockman");
$palavra = substr($lorem, 0, $procura); // função que escreve o texto, começando do ZERO, até a posição usada na variável acima.
echo $palavra;
pula();

$depoisTexto = substr($lorem, $procura + $quantidade); // nesse caso, o texto recebeu o valor a partir da posição da palavra, sem usar a palavra
echo "<br>$depoisTexto";
?>