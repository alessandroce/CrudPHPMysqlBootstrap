<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<meta charset="utf-8">
	<title>tela de Login</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<style type="text/css">
		#tamanho {
			width: 350px;
			-webkit-box-shadow: 10px 10px 28px -8px rgba(194,194,194,1);
			-moz-box-shadow: 10px 10px 28px -8px rgba(194,194,194,1);
			box-shadow: 10px 10px 28px -8px rgba(194,194,194,1);
		}
	</style>

</head>
<body>


	<div class="container" id="tamanho" style="margin-top: 100px; border-radius: 15px; border: 2px solid #f3f3f3">

		<div style="padding: 10px">

			<center>
				<img src="imagem/cadeado.png" width="125px" height="125px">	
			</center>
			<form action="index1.php" method="post">
				
				<div class="form-group">	
					<label>Usuário</label>
					<input type="text" name="usuario" class="form-control" placeholder="usuario" autocomplete="off" required>
				</div>

				<div class="form-group">	
					<label>Senha</label>
					<input type="password" name="senha" class="form-control" placeholder="senha" autocomplete="off" required>
				</div>

				

				<div style="text-align: right;">
					<button type="submit" class="btn btn-sm btn-success"> Entrar
						
					</button>
				</div>


			</form>

		</div>
	</div>

	<div style="margin-top: 10px">

		<center>
			<small> Você não possui cadastro? Clique <a href="cadastro_usuario_externo.php">aqui</a> </small>
		</center>

	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>