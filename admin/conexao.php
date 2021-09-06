<?php
	$servidor = "67.23.238.14";
	$usuario = "athixbr_bus	";
	$senha = "pent2530@MT";
	$dbname = "athixbr_bus";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
	
?>

