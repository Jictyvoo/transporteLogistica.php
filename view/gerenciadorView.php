<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Sistema Logistica Transporte</title>

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">	
	<link rel="stylesheet" type="text/css" href="css/fonts.css">	
	<link rel="stylesheet" type="text/css" href="css/definitions.css">

	<link rel="icon" href="imagens/favicon.ico">
</head>
<body>

	<?php
		include ("../controller/renamePages.php");
		include_once ("../model/Caminhao.php");
		include_once ("../model/CodificacaoPaginas.php");
		include_once ("../util/VetorLista.php");
		include_once ("../model/Item.php");
		session_start();
		if(!isset($_SESSION['navbarSelected']))
			$_SESSION['navbarSelected'] = "selecaoCaminhao.php";

		if(!isset($_SESSION['paginaAnterior']))
			$_SESSION['paginaAnterior'] = "selecaoCaminhao.php";

		if(isset($_SESSION['CodificacaoPaginas']) == false)
			$_SESSION['CodificacaoPaginas'] = new CodificacaoPaginas();

		if(isset($_SESSION['VetorLista']) == false)
			$_SESSION['VetorLista'] = array(new VetorLista(), new VetorLista());

		if($_SESSION['VetorLista'][0] -> size() <= 0){
			include ("../controller/medidasCaminhaoContainer.php");
			for($position = 0; $position < 3; $position += 1)
				$_SESSION['VetorLista'][0] -> add(new Caminhao(getVolume($conteineres[$position]), $conteineres[$position], getConsumoCaminhao($caminhoes[$position]), $caminhoes[$position]));
		}

		if(!isset($_GET['selectPage'])){
			$paginaDestino = $_SESSION['paginaAnterior'];
		}
		else{
			$paginaDestino = $_SESSION['CodificacaoPaginas'] -> getCodigoPagina($_GET['selectPage']);
		}

		$_SESSION['navbarSelected'] = $paginaDestino;
		$_SESSION['CodificacaoPaginas'] -> associaCodificacaoPagina();
		/*deletaPaginaCopia();
		copiaPaginas();*/

	?>

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class = "navbar-header">
			<a class = "navbar-brand" href = "#">Sistema Logistica Transporte</a>
		</div>

		<div>
			<ul class = "nav navbar-nav">
				<li class = "<?php echo $_SESSION['navbarSelected'] == 'selecaoCaminhao.php' ? 'active' : ''; ?>">
					<a href = "gerenciadorView.php?selectPage=<?= $_SESSION['CodificacaoPaginas'] -> getCodigos(0) ?>">Selecionar Caminhões</a>
				</li>
				<li class = "<?php echo $_SESSION['navbarSelected'] == 'insereItens.php' ? 'active' : ''; ?>">
					<a href = "gerenciadorView.php?selectPage=<?= $_SESSION['CodificacaoPaginas'] -> getCodigos(1) ?>">Inserir Itens</a>
				</li>
				<li class = "<?php echo $_SESSION['navbarSelected'] == 'itensInseridos.php' ? 'active' : ''; ?>">
					<a href = "gerenciadorView.php?selectPage=<?= $_SESSION['CodificacaoPaginas'] -> getCodigos(2) ?>">Itens Inseridos</a>
				</li>
				<li class = "<?php echo $_SESSION['navbarSelected'] == 'resultPage.php' ? 'active' : ''; ?>">
					<a href = "gerenciadorView.php?selectPage=<?= $_SESSION['CodificacaoPaginas'] -> getCodigos(3) ?>">Resultado Final</a>
				</li>
				
			</ul>
		</div>
	</nav><br/><br/><br/>
	<?php

		switch ($paginaDestino) {
			case "selecaoCaminhao.php":
				include("selecaoCaminhao.php");
				break;
			case "insereItens.php":
				include("insereItens.php");
				break;
			case "itensInseridos.php":
				include("itensInseridos.php");
				break;
			case "resultPage.php":
				include("resultPage.php");
				break;
			
			default:
				# code...
				break;
		}
	?>
</body>
</html>