<?php
	require_once ("../util/VetorLista.php");
	require_once ("../model/CodificacaoPaginas.php");
	require_once ("../model/Caminhao.php");
	require_once ("../model/Item.php");
	include ("../controller/medidasCaminhaoContainer.php");
	session_start();
	$_SESSION['mensagemSucesso'] = array("resultPage.php" => " ", "insereItens.php" => " ", "itensInseridos.php" => " ", "selecaoCaminhao.php" => " ");
	if($_SESSION['paginaAnterior'] == "selecaoCaminhao.php"){
		for($position = 0; $position < 3; $position += 1)
			$_SESSION['VetorLista'][0] -> set($position, new Caminhao(getVolume($_POST['container_'.$position]), $_POST['container_'.$position], getConsumoCaminhao($_POST['caminhao_'.$position]), $_POST['caminhao_'.$position]) );
	}
	else if($_SESSION['paginaAnterior'] == "insereItens.php"){
		require_once ("../model/Item.php");
		$_SESSION['VetorLista'][1] -> add(new Item($_POST['nomeItem'], (htmlspecialchars($_POST['descricao']) == null ? "(Sem Descrição)" : htmlspecialchars($_POST['descricao'])), $_POST['volume'], $_POST['quantidade'], $_POST['destinatario'], $_POST['destino']));
	}
	else if($_SESSION['paginaAnterior'] == "itensInseridos.php"){
		for($posicaoEdicao = 0; (!isset($_POST['editaDeleta_'.$posicaoEdicao])) && $posicaoEdicao < $_SESSION['VetorLista'][1] -> size(); $posicaoEdicao += 1);
			if($posicaoEdicao == $_SESSION['VetorLista'][1] -> size())
				$_SESSION['mensagemFalha'] = "Item não encontrado!";
			
			else{
				$editarDeletar = $_POST['editaDeleta_'.$posicaoEdicao];
				if($editarDeletar == "Deletar"){
					$_SESSION['VetorLista'][1] -> removeIndex($posicaoEdicao);
					$_SESSION['mensagemSucesso']["itensInseridos.php"] = "Item Removido Com Sucesso";
				}
				else{
					$_SESSION['paginaAnterior'] = "edicao.php";
					$_SESSION['editando'] = $posicaoEdicao;
				}
			}
	}
	else if($_SESSION['paginaAnterior'] == "edicao.php"){
		require_once ("../model/Item.php");
		$itemEditado = $_SESSION['VetorLista'][1] -> get($_SESSION['editando']);
		$itemEditado -> setNome($_POST['nomeItem']);
		$itemEditado -> setDescricao((htmlspecialchars($_POST['descricao']) == null ? "(Sem Descrição)" : htmlspecialchars($_POST['descricao'])));
		$itemEditado -> setVolume($_POST['volume']);
		$itemEditado -> setQuantidade($_POST['quantidade']);
		$itemEditado -> setDestino($_POST['destinatario']);
		$itemEditado -> setBairroDestino($_POST['destino']);
		$_SESSION['paginaAnterior'] = "itensInseridos.php";
	}
	else if($_SESSION['paginaAnterior'] == "resultPage.php"){
		if(isset($_POST['actionResult'])){
			if($_POST['actionResult'] == "Limpar Dados"){
				unset($_SESSION['VetorLista']);
				$_SESSION['mensagemSucesso']["resultPage.php"] = "<div class='alert alert-success' role='alert' align = 'center'>"."Dados Deletados com Sucesso"."</div>";
			}
		}
	}
	
	if($_SESSION['mensagemSucesso']["resultPage.php"] == " ")
		unset($_SESSION['mensagemSucesso']["resultPage.php"]);
	if($_SESSION['mensagemSucesso']["insereItens.php"] == " ")
		unset($_SESSION['mensagemSucesso']["insereItens.php"]);
	if($_SESSION['mensagemSucesso']["itensInseridos.php"] == " ")
		unset($_SESSION['mensagemSucesso']["itensInseridos.php"]);
	if($_SESSION['mensagemSucesso']["selecaoCaminhao.php"] == " ")
		unset($_SESSION['mensagemSucesso']["selecaoCaminhao.php"]);

	header('Location: '."../view/gerenciadorView.php?selectPage=".($_SESSION['CodificacaoPaginas'] -> getChave($_SESSION['paginaAnterior'])) );
?>