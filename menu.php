<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
  <?php 

  session_start();
  $usuario = $_SESSION['usuario'];
  
  $_SESSION['usuario'];

  if (!isset( $_SESSION['usuario'])) {
   header('Location: index.php');
 }

 include 'conexao.php';
 $sql = "SELECT nivel_usuario FROM usuarios WHERE mail_usuario = '$usuario' AND status = 'Ativo' ";
 $buscar = mysqli_query($conexao,$sql);
     $array = mysqli_fetch_array($buscar); //quando tem apenas um registro
     $nivel = $array['nivel_usuario'];

     ?>

     <div class="container" style="margin-top: 100px">

      <div class="row">

        <?php 

        if (($nivel == 1) || ($nivel = 2)) {

         ?>
         <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Adicionar produto</h5>
              <p class="card-text">Opção para adicionar produtos em nosso estoque.</p>
              <a href="adicionar_produto.php" class="btn btn-primary">Cadastrar Produto</a>
            </div>
          </div>
        </div>


      <?php } ?>

      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Lista de produtos</h5>
            <p class="card-text">Visualizar, Editar e Excluir os produtos.</p>
            <a href="listar_produtos.php" class="btn btn-primary">Produtos</a>
          </div>
        </div>
      </div>


      <div class="col-sm-6" style="margin-top: 20px">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Adicionar Categoria</h5>
            <p class="card-text">Opção para adicionar categoria.</p>
            <a href="adicionar_categoria.php" class="btn btn-primary">Cadastrar Categoria</a>
          </div>
        </div>
      </div>
      
      <div class="col-sm-6" style="margin-top: 20px">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Adicionar Fornecedor</h5>
            <p class="card-text">Opção para adicionar fornecedores.</p>
            <a href="adicionar_fornecedor.php" class="btn btn-primary">Cadastrar</a>
          </div>
        </div>
      </div>

      <div class="col-sm-6" style="margin-top: 20px">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Cadastrar Usuário</h5>
            <p class="card-text">Cadastrar Usuários.</p>
            <a href="adicionar_fornecedor.php" class="btn btn-primary">Cadastrar Usuário</a>
          </div>
        </div>
      </div>

      <div class="col-sm-6" style="margin-top: 20px">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Aprovar Usuários</h5>
            <p class="card-text">Aprovar usuários cadastrados.</p>
            <a href="aprovar_usuario.php" class="btn btn-primary">Aprovar</a>
          </div>
        </div>
      </div>


    </div>



  </div>



</div>








<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>