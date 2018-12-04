<?php

function criaCabecalho($titulo, $cssArray) {

	$cssExtra = array();
	foreach ($cssArray as $c) {
		array_push($cssExtra, '<link rel="stylesheet" type="text/css" href="'.$c.'">');
	}
	$cssExtra = implode("", $cssExtra);
	$cabecalho = include 'includ/header.php';

	return $cabecalho;
}

?>