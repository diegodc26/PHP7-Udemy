<?php

$diaSemana = date('w');

switch ($diaSemana) {
	case 0:
		echo "Domingo";# code...
		break;

	case 1:
		echo "Segunda";
		break;

	case 2:
		echo "Terça";
		break;

	case 3:
		echo "Quarta";
		break;

	case 4:
		echo "Quinta";
		break;

	case 5:
		echo "Sextooou";
		break;

	case 6:
		echo "Sabado";
		break;
	
	default:
		echo "Data invalida";
		break;
}

?>