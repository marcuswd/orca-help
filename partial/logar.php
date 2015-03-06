<div class="row">
	<div class="col-xs-12">
		<h1>A forma mais simples de gerenciar seus clientes.</h1>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<ul role="tablist" class="nav nav-tabs" id="tabGeral">
			<li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Login</a></li>
			<li role="presentation"><a href="#cadastro" aria-controls="cadastro" role="tab" data-toggle="tab">Cadastro</a></li>
		</ul>

		<div class="tab-content">
			<!-- Faça seu cadastro -->
			<div id="login" role="tabpanel" class="tab-pane active">
				<h2>Seja bem vindo ao Orça net</h2>
				
				<button class="btn btn-primary">Entrar com o Facebook</button>
				<p>ou</p>
				<p>Entre com seu usuário e senha</p>
				<form action="">
					<div class="form-group">
						<label for="campoUser">Usuário</label>
						<input type="text" id="campoUser" class="form-control" placeholder="Usuário">
					</div>
					<div class="form-group">
						<label for="campoPass">Senha</label>
						<input type="text" id="campoPass" class="form-control" placeholder="Senha">
					</div>

					<input type="submit" value="Efetuar Login" class="btn btn-primary">
				</form>
			</div>
			<!-- Faça seu cadastro -->

			<div id="cadastro" role="tabpanel" class="tab-pane">
				<h2>Faça seu cadastro.</h2>
				<button class="btn btn-primary">Cadastrar com o Facebook</button>
				<p>ou</p>
				<p>Preencha os campos abaixo</p>

				<form action="">
					<div class="form-group">
						<label for="nomeCompleto">Nome Completo</label>
						<input type="text" class="form-control" id="nomeCompleto" placeholder="Nome Completo" tabindex="1">
					</div>
					<div class="form-group">
						<label for="email">E-mail</label>
						<input type="text" class="form-control" id="email" placeholder="E-mail" tabindex="2">
					</div>
					<div class="form-group">
						<label for="senha">Senha</label>
						<div class="input-group">
							<input class="form-control campo-senha" type="password" id="senha" tabindex="3">
							<div class="input-group-addon">
								<a href="#" class="glyphicon glyphicon-eye-open showPass"></a>
							</div>
						</div>
					</div>

					<input type="submit" value="Efetuar Cadastro" class="btn btn-primary" tabindex="4">
				</form>
			</div>
		</div>

	</div>
</div>