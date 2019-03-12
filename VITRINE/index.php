<html>
<head>
	<?php include_once('contents/head.php'); ?>
	<title> Estudo - DSI </title>
</head>
<body>

	<?php 
		include_once('contents/header.php');
		$breadcrumb = "<a href='index.php'>Home</a>";
		include_once('contents/nav.php'); 
	?>

	<div class="container box">
	
	<?php
		include_once('conexao.php');
		// verifica se algum item foi pesquisado, 
		// em caso negativo, exibe todos
		if(isset($_GET['search']) AND !empty($_GET['search'])){
			$search = ' WHERE produto LIKE "%'.$_GET['search'].'%"';
			$title = 'Resultados para "'.$_GET['search'].'"';
		} else {
			$search = "";
			$title = 'Loja de exemplo - Estudo DSI';
		}

		echo "<div class='titulo-vitrine'><h2>$title</h2></div><div class='row'>";
		
		// ajustando a instrucao select para ordenar por produto
		$query = mysqli_query($conexao,"select * from tabelaimg$search order by produto");

		if (!$query) {
			die('Query Invalida: ' . @mysqli_error($conexao));  
		}

		if (mysqli_num_rows($query)==0) {
			echo "<div style='margin:30px 0;width:100%;text-align:center;color:#666;'><p>Nenhum produto foi encontrado para essa pesquisa...</p> <p class='triste'>:(</p>";
		}

		while($dados=mysqli_fetch_array($query)) 
		{
			echo "<div class='grid-vitrine'><div class='box-vitrine'>";

			// buscando a na pasta imagem
			if (empty($dados['imagem'])){
				$imagem = 'SemImagem.png';
			}else{
				$imagem = $dados['imagem'];
			}
			$id = base64_encode($dados['id']);
			echo "<img src='images/produtos/$imagem' width='150px' heigth='150px'><br>";
			// demais infos
			echo "<p class='produto-nome'>".$dados['produto']."</p>";
			echo "<p class='produto-valor'>Por: R$ ".$dados['valor']."</p>";
			echo "<p class='produto-codigo'>Codigo do item: ".$dados['codigo']."</p>";

			echo "<a href='verproduto.php?id=$id'><span class='produto-btn'>Ver Mais</span></a>";

			echo "</div></div>";
		}
		
		mysqli_close($conexao);
	?>
	</div>
	</div>
</body>
</html>
