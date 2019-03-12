<html>
<head>
	<?php include_once('contents/head.php'); ?>
	<title> Estudo - DSI </title>
</head>
<body>

	<?php 
		function convertedata($data){
			$data_vetor = explode('-', $data);
			$novadata = implode('/', array_reverse ($data_vetor));
			return $novadata;
		}

		include_once('conexao.php');
		// recuperando a informacao da URL
		// verifica se parametro esta correto e dento da normalidade 
		if(isset($_GET['id']) && is_numeric(base64_decode($_GET['id']))){
				$id = base64_decode($_GET['id']);
		} else {
			header('Location: index.php');
		}
		// realizando a pesquisa com o id recebido
		$query = mysqli_query($conexao,"select * from tabelaimg where id = $id");

		mysqli_close($conexao);

		if (!$query) {
			die('Query Invalida: ' . @mysqli_error($conexao));  
		}

		$dados=mysqli_fetch_array($query);

		include_once('contents/header.php');
		$breadcrumb = "<a href='index.php'>Home</a> <span class='divider'>/</span> ".$dados['produto'];
		include_once('contents/nav.php'); 
		
		echo "<div class='container box'>";
		echo "<div class='titulo-vitrine'><h2>".$dados['produto']."</h2></div>";
	?>
	<a href="javascript:window.history.go(-1)" class="voltar">&#9204;  Voltar</a>
	<div class="row">
	<?php

		echo "<table><tr><td width='300px' align='center'>";
		if (empty($dados['imagem'])){
				$imagem = 'SemImagem.png';
			}else{
				$imagem = $dados['imagem'];
			}
		echo "<img src='images/produtos/$imagem' >";
		echo "</td><td>";
		echo "<p class='full-data'><b>Data: </b>".convertedata($dados['data'])."</p>";	
		echo "<p class='full-desc'>".$dados['descricao']."</p>";	
		echo "<p class='full-nome'>".$dados['produto']."</p>";
		echo "<p class='full-codigo'><b>Codigo: </b>".$dados['codigo']."</p>";	
		echo "<p class='full-valor'><b>Por: </b> R$ ".$dados['valor']."</p>";
		
		echo "<span class='full-btn'>Produto indisponivel</span>";
		echo "</td></tr></table>";
		
	?>
	<br>
	</div>
	</div>
</body>
</html>
