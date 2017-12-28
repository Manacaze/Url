<?php
require_once "Connection.php";
require_once "classe_membro.php";
require_once "Usuario.php";

	function getMesPortugues($diaMes){
		$mesInicial = $diaMes;
		$mesResult = '';
		if($mesInicial == 1)
			$mesResult='Janeiro';
		else if($mesInicial == 2)
			$mesResult='Fevereiro';
		elseif($mesInicial == 3)
			$mesResult = 'Mar&ccedil;o';
		elseif($mesInicial == 4)
			$mesResult = 'Abril';
		elseif($mesInicial == 5)
			$mesResult = 'Maio';
		elseif($mesInicial == 6)
			$mesResult = 'Junho';
		elseif($mesInicial == 7)
			$mesResult = 'Julho';
		elseif($mesInicial == 8)
			$mesResult = 'Agosto';
		elseif($mesInicial == 9)
			$mesResult = 'Setembro';
		elseif($mesInicial == 10)
			$mesResult = 'Outubro';
		elseif($mesInicial == 11)
			$mesResult = 'Novembro';
		elseif($mesInicial == 12)
			$mesResult = 'Dezembro';
		
		return $mesResult;
	}
	function getRow($table, $line, $reference, $valueLike)
	{
		global $con;
		$sql = "SELECT `$line` FROM `$table` WHERE `$reference` = '$valueLike'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
		return $row[$line];
	}
	function convertDate($date)
	{
		return date("d/m/Y", strtotime($date));
	}

?>