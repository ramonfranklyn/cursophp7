<?php

	$suaIdade = 17;
	$idadeMenor = 12;
	$idadeMaior = 18;
	$idadeMelhor = 65;

	if ($suaIdade < $idadeMenor) {
		echo "Criança";
	}elseif ($suaIdade > $idadeMenor && $suaIdade < $idadeMaior) {
		echo "Adolescente";
	}elseif ($suaIdade > $idadeMaior && $suaIdade < $idadeMelhor) {
		echo "Adulto";
	}else {
		echo "Sênior";
	}

	echo "<hr>";

	echo ($suaIdade >= $idadeMaior)? "Maior de idade":"Menor de idade";