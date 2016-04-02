<?php if ( ! defined('ABSPATH')) exit; ?>

	<?php
	if ( $this->logged_in ) {
		echo '<div class="col-md-offset-2 col-md-8"><div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			Logado com sucesso
		</div></div>';
		$this->goto_page(HOME_URI.'/home/');
	}
	?>
	<?php
	if ( $this->login_error ) {
		echo '<div class="col-md-offset-2 col-md-8"><div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'. $this->login_error .'</div></div>';
	}
	?>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">
					<h3>Login de Usuários</h3>
				</div>
				<div class="panel-body">
					<form role="form" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Usuário" name="userdata[user]" type="text" autofocus="" required maxlength="50">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Senha" name="userdata[user_password]" type="password" value="" required maxlength="50">
							</div>

							<button type="submit" class="btn btn-primary">Entrar</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	