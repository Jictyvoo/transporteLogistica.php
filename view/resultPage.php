<?php
	$_SESSION['paginaAnterior'] = "resultPage.php";
?>

<div class"container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<form method="post" action="../controller/gerenciaControle.php">
						<div class="input-group">
							<span class="input-group-addon" id="basic-addon1">Resultado</span>
							<input type="text" class="form-control" name="Resultado" placeholder="Resultado Final" aria-describedby="basic-addon1">
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>