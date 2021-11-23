<?php 
	$usuario = "root";
	$senha = "";
	$db = "crud";

	try {
		$db = new PDO (
			'mysql:host=localhost; dbname='.$db,$usuario,$senha,
			array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
		);
	} catch (Exception $erro) {
		echo "Erro: ".$erro -> getMessage();
	}
?>