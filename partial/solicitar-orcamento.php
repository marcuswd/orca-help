<div class="row">
	<div class="col-lg-4 col-xs-12">
		<?php include("menu-interno.php"); ?>
	</div>
	<div class="col-lg-8 col-xs-12">
		<h1>Solicitar orçamento</h1>
		
		<form action="">
			<div class="row">
				<div class="col-lg-12">
						<div class="form-group">
							<label for="solicitacao">Solicitação</label>
							<input type="text" class="form-control" id="solicitacao" placeholder="Nome da solicitação">
						</div>
				</div>

				<div class="col-lg-4 col-xs-6">
					<div class="form-group">
						<label for="prazo">Prazo de finalização</label>
						<div class="input-group date">
							<input type="text" class="form-control" id="prazo" placeholder="DD/MM/YYYY">
							<span class="input-group-addon">
								<i class="glyphicon glyphicon-calendar"></i>
							</span>
						</div>
					</div>
				</div>

				<div class="col-xs-12">
					<label for="detalheTrabalho">Detalhes sobre o trabalho</label>
					<textarea name="" id="" cols="30" id="detalheTrabalho" rows="10" class="form-control"></textarea>
				</div>

				<div class="col-xs-12">
					<div class="form-group">
						<label for="">Arquivos</label>
							<input type="file" class="form-control" id="arquivosProjeto">
					</div>
				</div>

				<div class="col-xs-12">
					<input type="text" value="Enviar solicitação" class="btn btn-primary">
				</div>
			</div>
		</form>
	</div>
</div>