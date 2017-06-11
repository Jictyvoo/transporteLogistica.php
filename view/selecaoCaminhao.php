<?php
	$_SESSION['paginaAnterior'] = "selecaoCaminhao.php";
?>

<div class"container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-body">
					<form method="post" action="../controller/gerenciaControle.php">
						<div class="form-group">
							<table class="table">
								<thead>
									<tr>
										<?php for($position = 0; $position < 3; $position += 1): ?>
											<th><label for="sel<?= $position ?>">Caminhão <?= $position ?>:</label></th>
										<?php endfor ?>
									</tr>
								</thead>
								<tbody>
									<tr>
										<?php for($position = 0; $position < 3; $position += 1): ?>
											<td>
												<select class="form-control" name="caminhao_<?= $position ?>">
													<option>Toco</option>
													<option>Truck</option>
													<option>Carreta 2 eixos</option>
													<option>Carreta Baú</option>
													<option>Carreta 3 eixos</option>
													<option>Carreta Cavalo Truckado</option>
													<option>Carreta Cavalo Truckado Baú</option>
													<option>Bi-trem(Treminhão) - 7 eixos</option>
												</select>										
											</td>
										<?php endfor ?>	
									</tr>

									<tr>
										<?php for($position = 0; $position < 3; $position += 1): ?>
											<td>
												<select class="form-control" name="container_<?= $position ?>">
													<option value="DryVan">Dry van</option>
													<option value="Bulk">Bulk</option>
													<option value="Ventilated">Ventilated</option>
													<option value="OpenTop">Open top</option>
													<option value="Reefer">Reefer</option>
													<option value="DryVanMaior">Dry van (Maior)</option>
													<option value="BulkMaior">Bulk (Maior)</option>
													<option value="DryHighCube">Dry high cube</option>
													<option value="OpenTopMaior">Open top (Maior)</option>
													<option value="ReeferMaior">Reefer (Maior)</option>
													<option value="PortHole">Port Hole</option>
													<option value="FlatTrack">Flat track</option>
												</select>
											</td>
										<?php endfor ?>	
									</tr>
								</tbody>
							</table>
							<p align="center"><input type="submit" class="btn btn-success" name="salvaCaminhoes" value="Salvar"></p>

							<br/><br/>
							<?php include ("../controller/medidasCaminhaoContainer.php"); ?>
							<table class="table">
								<tbody>
									<tr>

										<td>
											<div class="panel panel-primary">
												<div class="panel-heading">
													<h3 class="panel-title">Caminhoes</h3>
												</div>
												<div class="panel-body">
													<table class="table">
														<thead>
															<tr>
																<th><label for="sel1">Modelo</label></th>
																<th><label for="sel1">Consumo(Km/L)</label></th>
															</tr>
														</thead>
														<tbody>
															<?php foreach ($caminhoes as $modelos): ?>
																<tr>
																	<td>
																		<?php echo $modelos ?>
																	</td>
																	<td>
																		<p align="center"><?php echo getConsumoCaminhao($modelos); ?></p>
																	</td>
																</tr>
															<?php endforeach ?>
														</tbody>
													</table>
												</div>
											</div>
										</td>

										<td>
											<div class="panel panel-primary">
												<div class="panel-heading">
													<h3 class="panel-title">Conteineres</h3>
												</div>
												<div class="panel-body">
													<table class="table">
														<thead>
															<tr>
																<th><label for="sel1">Modelo</label></th>
																<th><label for="sel1">Capacidade(m³)</label></th>
															</tr>
														</thead>
														<tbody>
															<?php foreach ($conteineres as $modelos): ?>
																<tr>
																	<td>
																		<?php echo $modelos ?>
																	</td>
																	<td>
																		<p align="center"><?php echo getVolume($modelos); ?></p>
																	</td>
																</tr>
															<?php endforeach ?>
														</tbody>
													</table>
												</div>
											</div>
										</td>

									</tr>
								</tbody>
							</table>

						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>