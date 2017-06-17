<?php
	$_SESSION['paginaAnterior'] = "insereItens.php";
?>

<div class = "container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="panel panel-default">
				<div class="panel-body">
					<form method="post" action="../controller/gerenciaControle.php">
						<span class="input-group-addon" id="basic-addon1">Nome Item</span>
						<input type="text" name="nomeItem" placeholder="Nome Item" class="form-control" aria-describedby="basic-addon1" required/><br/>
						<span class="input-group-addon" id="basic-addon1">Descricao</span>
						<textarea class="form-control" rows="5" name="descricao" aria-describedby="basic-addon1"></textarea>
						<br/>
						<span class="input-group-addon" id="basic-addon1">Destinatario</span>
						<input type="text" name="destinatario" placeholder="Nome Destinatario" class="form-control" aria-describedby="basic-addon1" required/>

						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">Volume Item</span>
							<input type="number" min="1" max="970" name="volume" class="form-control" aria-describedby="basic-addon1" required/>

							<span class="input-group-addon" id="basic-addon1">Quantidade</span>
							<input type="number" min="1" max="270" name="quantidade" class="form-control" aria-describedby="basic-addon1" value="1">

							<span class="input-group-addon" id="basic-addon1">Destino</span>
							<select class="form-control" name="destino">
								<option value="Presidente Antonio Olinda">Presidente Antonio Olinda</option>
								<option value="Avenida Feijó">Avenida Feijó</option>
								<option value="Rua das Flores">Rua das Flores</option>
								<option value="Casemiro Pompeia">Casemiro Pompeia</option>
								<option value="Rua Atena Romana">Rua Atena Romana</option>
							</select>
						</div>
						<br/><p align="center"><input type="submit" class="btn btn-success" name="Inserir" value="Inserir"></p>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>