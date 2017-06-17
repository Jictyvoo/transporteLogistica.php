<?php
	$_SESSION['paginaAnterior'] = "edicao.php";
?>

<div class = "container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="panel panel-default">
				<div class="panel-body">
					<?php $itemEditado = $_SESSION['VetorLista'][1] -> get($_SESSION['editando']); ?>
					<form method="post" action="../controller/gerenciaControle.php">
						<span class="input-group-addon" id="basic-addon1">Nome Item</span>
						<input type="text" name="nomeItem" placeholder="Nome Item" class="form-control" aria-describedby="basic-addon1"
						 value="<?php echo $itemEditado -> getNome(); ?>" required/><br/>
						<span class="input-group-addon" id="basic-addon1">Descricao</span>
						<textarea class="form-control" rows="5" name="descricao" aria-describedby="basic-addon1" placeholder="(Sem Descrição)"><?php if($itemEditado -> getDescricao() != "(Sem Descrição)") echo $itemEditado -> getDescricao(); ?></textarea>
						<br/>
						<span class="input-group-addon" id="basic-addon1">Destinatario</span>
						<input type="text" name="destinatario" placeholder="Nome Destinatario" class="form-control" aria-describedby="basic-addon1"
						 value="<?php echo $itemEditado -> getDestino(); ?>" required/>

						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">Volume Item</span>
							<input type="number" min="1" max="970" name="volume" class="form-control" aria-describedby="basic-addon1"
							 value="<?php echo $itemEditado -> getVolume(); ?>" required/>

							<span class="input-group-addon" id="basic-addon1">Quantidade</span>
							<input type="number" min="1" max="270" name="quantidade" class="form-control" aria-describedby="basic-addon1"
							 value="<?php echo $itemEditado -> getQuantidade(); ?>">

							<span class="input-group-addon" id="basic-addon1">Destino</span>
							<select class="form-control" name="destino">
								<option value="Presidente Antonio Olinda" <?= ($itemEditado -> getBairroDestino() == "Presidente Antonio Olinda") ? "selected" : "" ?>>
									Presidente Antonio Olinda
								</option>
								<option value="Avenida Feijó" <?= ($itemEditado -> getBairroDestino() == "Avenida Feijó") ? "selected" : "" ?>>
									Avenida Feijó
								</option>
								<option value="Rua das Flores" <?= ($itemEditado -> getBairroDestino() == "Rua das Flores") ? "selected" : "" ?>>
									Rua das Flores
								</option>
								<option value="Casemiro Pompeia" <?= ($itemEditado -> getBairroDestino() == "Casemiro Pompeia") ? "selected" : "" ?>>
									Casemiro Pompeia
								</option>
								<option value="Rua Atena Romana" <?= ($itemEditado -> getBairroDestino() == "Rua Atena Romana") ? "selected" : "" ?>>
									Rua Atena Romana
								</option>
							</select>
						</div>
						<br/><p align="center"><input type="submit" class="btn btn-success" name="concluir" value="Concluir"></p>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>