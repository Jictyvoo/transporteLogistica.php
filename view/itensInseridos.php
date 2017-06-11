<?php
	include_once ("../model/Item.php");
	$_SESSION['paginaAnterior'] = "itensInseridos.php";
?>
<div class = "container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<form style=" max-width: 810px; padding: 10px; margin: 0 auto;" method = "post" action = "../controller/gerenciaControle.php">
				<?php
					if($_SESSION['VetorLista'][1] -> size() <= 0)
						echo "<div class='alert alert-danger' role='alert' align = 'center'>"."Não há nenhum Item armazenado"."</div>";
				?>
				<?php for($position = 0; $position < $_SESSION['VetorLista'][1] -> size(); $position += 1): ?>

					<div class="row">
						<div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title" align ="center">
										<?php echo $_SESSION['VetorLista'][1] -> get($position) -> getDescricao(); ?>
										<input style="float:left;" type = "submit" name = "<?= 'editaDeleta_'.$position; ?>" value = "Editar"/>
										<input style="float:right;" type = "submit" name = "<?= 'editaDeleta_'.$position; ?>" value = "Deletar"><br/><br/>
									</h3>
								</div>
								<div class="panel-body">
									<div>

										<table class="table">
											<thead>
												<tr>
													<th>Descricao</th>
													<th>Volume</th>
													<th>Destinatario</th>
													<th>Bairro Destino</th>
												</tr>
											</thead>
											
											<tbody>
												<tr>
													<td><?php echo $_SESSION['VetorLista'][1] -> get($position) -> getDescricao(); ?></td>
													<td><?php echo $_SESSION['VetorLista'][1] -> get($position) -> getVolume(); ?></td>
													<td><?php echo $_SESSION['VetorLista'][1] -> get($position) -> getDestino(); ?></td>
													<td><?php echo $_SESSION['VetorLista'][1] -> get($position) -> getBairroDestino(); ?></td>
												</tr>								  
											</tbody>
										</table>

									</div><!-- fecha do div da tabela -->
								</div><!-- fecha div panel-body -->
							</div>
						</div><!-- /.col-sm-6 -->
					</div>

				<?php endfor ?>
			</form>
		</div>
		<div class="col-md-1"></div>
	</div>
</div>