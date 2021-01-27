<?php
/*
$anoNascimento = 1993;
//comentario linha
$nomeCompleto = "DiegoOliveira";
*/
$nome1 = "Diego";

$sobrenome = "Oliveira";

$nomeCompleto = $nome1 ." " . $sobrenome;

echo $nomeCompleto;

echo "<br>";

unset($nome1);

if (isset($diego1)){
	echo $nome1;
}

