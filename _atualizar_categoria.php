<?php 

  include 'conexao.php';

  $id = $_POST['id'];
  $categoria = $_POST['categoria'];

  $sql = "UPDATE `categoria` SET `categoria` = '$categoria' WHERE id_categoria = $id ";
  
  $atualiza = mysqli_query($conexao,$sql)
 ?>

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

 <div class="container" style="width: 400px">
 	<center>
 		<h3>Atualizado com sucesso</h3>
 		<div style="margin-top: 10px">	
 			<a href="listar_categoria.php" class="btn btn-sm btn-warning" style="color: #fff">Voltar</a>
 		</div>
 	</center>
 </div>