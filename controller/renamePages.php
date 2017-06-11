<?php
	function copiaPaginas(){
		$_SESSION['nomePaginaCopia'] = "../view/".$_SESSION['CodificacaoPaginas'] -> getChave($_SESSION['navbarSelected']).".php";
		if (!copy("../view/gerenciadorView.php", $_SESSION['nomePaginaCopia'])) {
			echo "Falha ao assegurar Pagina".$_SESSION['nomePaginaCopia']."<br/>";
		}
	}
	
	function deletaPaginaCopia(){
		if (file_exists($_SESSION['nomePaginaCopia']))
			unlink($_SESSION['nomePaginaCopia']);
	}
	
	function renomarArquivo(){
		$newname = "../view/".$_SESSION['CodificacaoPaginas'] -> getChave($_SESSION['navbarSelected']).".php";
		rename ($_SESSION['nomePaginaCopia'], $newname);
		$_SESSION['nomePaginaCopia'] = $newname;
	}
?>