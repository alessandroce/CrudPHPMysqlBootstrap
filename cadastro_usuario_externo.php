<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
	<div class="container" style="width: 400px; margin-top: 40px">
		<div style="text-align: right">
			<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
		</div>
		<h4>Cadastro de Usuário</h4>
		
		<form action="_insert_usuario_externo.php" method="post">
			<div class="form-group">
				<label>Nome do Usuário</label>
				<input type="text" name="nomeusuario" class="form-control" required autocomplete="off" placeholder="Nome completo">
			</div>
			<div class="form-group">
				<label>E-mail</label>
				<input type="email" name="emailusuario" class="form-control" required autocomplete="off" placeholder="Seu E-mail">
			</div>
			<div class="form-group">
				<label>Senha do Usuário</label>
				<input type="password" id="txtSenha" name="senhausuario" class="form-control" required autocomplete="off" placeholder="Senha">
			</div>
			<div class="form-group">
				<label>Repetir Senha</label>
				<input type="password" name="nomeusuario2" class="form-control" required autocomplete="off" placeholder="Repetir Senha" oninput="validaSenha(this)">
				<small>Precisa ser igual a senha digitada acima.</small>
			</div>

			<div style="text-align: right">
				<button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
			</div>

		</form>
	</div>



	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<!-- Script -->

	<script>
		function validaSenha (input){ 
			if (input.value != document.getElementById('txtSenha').value) {
				input.setCustomValidity('Repita a senha corretamente');
			} else {
				input.setCustomValidity('');
			}
		} 
	</script>


</body>
</html>