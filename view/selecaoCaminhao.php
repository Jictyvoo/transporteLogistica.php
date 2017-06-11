<?php
	include_once ("../controller/medidasCaminhaoContainer.php");
	$_SESSION['paginaAnterior'] = "selecaoCaminhao.php";
?>

<div class = "container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="panel panel-default">
				<div class="panel-body">
					<form method="post" action="../controller/gerenciaControle.php">
						<div class="form-group">
							<table class="table">
								<thead>
									<tr>
										<?php for($position = 0; $position < 3; $position += 1): ?>
											<th><label for="sel<?= $position + 1 ?>">Caminhão <?= $position + 1 ?>:</label></th>
										<?php endfor ?>
									</tr>
								</thead>
								<tbody>
									<tr>
										<?php for($position = 0; $position < 3; $position += 1): ?>
											<td>
												<select class="form-control" name="caminhao_<?= $position ?>">
													<?php $controleModelo = $_SESSION['VetorLista'][0] -> get($position) -> getModeloCaminhao(); ?>
													<option <?php if($controleModelo == "Toco") echo "selected"; ?>>
														Toco
													</option>
													<option <?php if($controleModelo == "Truck") echo "selected"; ?>>
														Truck
													</option>
													<option <?php if($controleModelo == "Carreta 2 eixos") echo "selected"; ?>>
														Carreta 2 eixos
													</option>
													<option <?php if($controleModelo == "Carreta Baú") echo "selected"; ?>>
														Carreta Baú
													</option>
													<option <?php if($controleModelo == "Carreta 3 eixos") echo "selected"; ?>>
														Carreta 3 eixos
													</option>
													<option <?php if($controleModelo == "Carreta Cavalo Truckado") echo "selected"; ?>>
														Carreta Cavalo Truckado
													</option>
													<option <?php if($controleModelo == "Carreta Cavalo Truckado Baú") echo "selected"; ?>>
														Carreta Cavalo Truckado Baú
													</option>
													<option <?php if($controleModelo == "Bi-trem(Treminhão) - 7 eixos") echo "selected"; ?>>
														Bi-trem(Treminhão) - 7 eixos
													</option>
												</select>										
											</td>
										<?php endfor ?>	
									</tr>

									<tr>
										<?php for($position = 0; $position < 3; $position += 1): ?>
										<?php $controleModelo = $_SESSION['VetorLista'][0] -> get($position) -> getModeloContainer(); ?>
											<td>
												<select class="form-control" name="container_<?= $position ?>">
													<option value="DryVan" <?php if($controleModelo == "DryVan") echo "selected"; ?>>Dry van</option>
													<option value="Bulk" <?php if($controleModelo == "Bulk") echo "selected"; ?>>Bulk</option>
													<option value="Ventilated" <?php if($controleModelo == "Ventilated") echo "selected"; ?>>Ventilated</option>
													<option value="OpenTop" <?php if($controleModelo == "OpenTop") echo "selected"; ?>>Open top</option>
													<option value="Reefer" <?php if($controleModelo == "Reefer") echo "selected"; ?>>Reefer</option>
													<option value="DryVanMaior" <?php if($controleModelo == "DryVanMaior") echo "selected"; ?>>Dry van (Maior)</option>
													<option value="BulkMaior" <?php if($controleModelo == "BulkMaior") echo "selected"; ?>>Bulk (Maior)</option>
													<option value="DryHighCube" <?php if($controleModelo == "DryHighCube") echo "selected"; ?>>Dry high cube</option>
													<option value="OpenTopMaior" <?php if($controleModelo == "OpenTopMaior") echo "selected"; ?>>Open top (Maior)</option>
													<option value="ReeferMaior" <?php if($controleModelo == "ReeferMaior") echo "selected"; ?>>Reefer (Maior)</option>
													<option value="PortHole" <?php if($controleModelo == "PortHole") echo "selected"; ?>>Port Hole</option>
													<option value="FlatTrack" <?php if($controleModelo == "FlatTrack") echo "selected"; ?>>Flat track</option>
												</select>
											</td>
										<?php endfor ?>	
									</tr>
								</tbody>
							</table>
							<p align="center"><input type="submit" class="btn btn-success" name="salvaCaminhoes" value="Salvar"></p>

							<br/><br/>
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
		<div class="col-md-1"></div>
	</div>
</div>