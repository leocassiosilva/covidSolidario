<?php
function retirarAcento($value)
{
	$semAcento = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$value);
	return $semAcento;
}

function maiuscula($value)
{
	return strtoupper($value);
}

function maiuscula1($value)
{	
	$nome = array();

	foreach ($value as $item) {
		$nome [] = strtoupper($item);
	}
	return $nome;
}

function pesquisarComparar($palavra, $nome)
{
	foreach ($palavra as $v) {        
		if ($v == $nome) {
			return true;
		}		
	}
	return false;
}

?>