<?php

$qualASuaIdade = 26;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;


if ($qualASuaIdade < $idadeCrianca)
{
	echo "Criança";
}elseif ($qualASuaIdade < $idadeMaior) 
{
	echo "Adolecente";
}elseif ($qualASuaIdade < $idadeMelhor)
{
	echo "Adulto";
}else
{
	echo "Idoso";
}

echo "<br>";

//operador ternario
echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";