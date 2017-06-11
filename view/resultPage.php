<?php
	$_SESSION['paginaAnterior'] = "resultPage.php";
?>

<div class = "container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<?php
				if (isset($_SESSION['mensagemSucesso']["resultPage.php"])){
					echo $_SESSION['mensagemSucesso']["resultPage.php"];
					unset($_SESSION['mensagemSucesso']["resultPage.php"]);
				}
				else{
			?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<div align="center">Resultados Transportes <?php echo $_SESSION['VetorLista'][1] -> size(); ?> Itens</div>
						<form method="post" type = "submit" action="../controller/gerenciaControle.php">
							<input style="float:right;" type = "submit" name = "actionResult" value = "Limpar Dados">
						</form>
					</h3>
				</div>
				<div class="panel-body">
					<table class="table">
						<thead>
							<tr>
								<?php for($position=0; $position < 3; $position += 1): ?>
									<th>Caminhão <?php echo $position + 1; ?></th>
								<?php endfor ?>
							</tr>
						</thead>

						<tbody>
								<tr>
									<?php for($position=0; $position < 3; $position += 1): ?>
										<td>
											<?php echo $_SESSION['VetorLista'][0] -> get($position) -> getModeloCaminhao(); ?>
											[<?php echo $_SESSION['VetorLista'][0] -> get($position) -> getConsumoDeCombustivel(); ?>Km/L]
										</td>
									<?php endfor ?>
								</tr>
								<tr>
									<?php for($position=0; $position < 3; $position += 1): ?>
										<td>
											<?php echo $_SESSION['VetorLista'][0] -> get($position) -> getModeloContainer(); ?>
											[<?php echo $_SESSION['VetorLista'][0] -> get($position) -> getVolumeBau(); ?>m³]
										</td>
									<?php endfor ?>
								</tr>
						</tbody>
					</table>
				</div>
			</div>
			<?php } ?>
		<div class="col-md-1"></div>
	</div>
</div>