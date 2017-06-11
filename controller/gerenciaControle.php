<?php
	include_once ("../util/VetorLista.php");
	include_once ("../model/CodificacaoPaginas.php");
	include_once ("../model/Caminhao.php");
	include ("../controller/medidasCaminhaoContainer.php");
	session_start();
	if($_SESSION['paginaAnterior'] == "selecaoCaminhao.php"){
		for($position = 0; $position < 3; $position += 1)
			$_SESSION['VetorLista'][0] -> set($position, new Caminhao(getVolume($_POST['container_'.$position]), $_POST['container_'.$position], getConsumoCaminhao($_POST['caminhao_'.$position]), $_POST['caminhao_'.$position]) );
	}
	else if($_SESSION['paginaAnterior'] == "insereItens.php"){
		include_once ("../model/Item.php");
		$_SESSION['VetorLista'][1] -> add(new Item($_POST['descricao'], $_POST['volume'], $_POST['destinatario'], $_POST['destino']));
	}
	header('Location: '."../view/gerenciadorView.php?selectPage=".($_SESSION['CodificacaoPaginas'] -> getChave($_SESSION['paginaAnterior'])) );
	var_dump($_SESSION['VetorLista'][1]);
?>