<?php

	$diaDaSemana = date("w");

	//echo $diaDaSemana;

	//echo "<br>";

	switch ($diaDaSemana) {
		case 1:
			echo "Segunda-feira";
			break;

		case 2:
			echo "Terça-feira";
			break;

		case 3:
			echo "Quarta-feira";
			break;

		case 4:
			echo "Quinta-feira ";
			break;

		case 5:
			echo "Sexta-feira";
			break;

		case 6:
			echo "Sábado";
			break;

		default:
			echo "Domingo";
			break;
	}

?>