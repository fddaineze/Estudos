<?php
	$host = "localhost"; 			
	$user = "root"; 
	$pass = "usbw"; 
	$banco = "banco";
		
	$conexao = @mysqli_connect($host, $user, $pass, $banco ) 
	or die ("Problemas com a conex�o do Banco de Dados");
?>
