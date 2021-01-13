<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Formulário de Cadastro</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <script src="http://kit.fontawesome.com/8786c39b09.js"></script>

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

     <div class="container" style="margin-top: 40px">

      <div style="text-align: right">
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
      </div>

      <h3>Lista de produtos</h3>

      <!-- -->

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nro Produto</th>
            <th scope="col">Nome Produto</th>
            <th scope="col">Categoria</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Fornecedor</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>

        <?php  

        include 'conexao.php';

        $sql = 'select * from estoque';
        $busca = mysqli_query($conexao,$sql);

        while ($array = mysqli_fetch_array($busca)){

          $id_estoque = $array['id_estoque'];
          $nroproduto = $array['nroproduto'];
          $nomeproduto = $array['nomeproduto'];
          $categoria = $array['categoria'];
          $quantidade = $array['quantidade'];
          $fornecedor = $array['fornecedor'];

          ?>

          <tr>

            <td><?php echo $nroproduto ?></td>
            <td><?php echo $nomeproduto ?></td>
            <td><?php echo $categoria ?></td>
            <td><?php echo $quantidade ?></td>
            <td><?php echo $fornecedor ?></td>
            <td>
              <?php 
              if (($nivel == 1) || ($nivel = 2)) {
               ?>
               <a class="btn btn-warning btn-sm" style="color: #fff" href="_editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>

              <?php } 

             if ($nivel == 1) {
              ?>

              <a class="btn btn-danger btn-sm" style="color: #fff" href="_deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>

              <?php } ?>

          </td>

        <?php } ?>

      </tr>

    </table>



  </div>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>