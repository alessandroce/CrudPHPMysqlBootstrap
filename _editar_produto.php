<?php 

  include 'conexao.php';

  $id = $_GET['id'];

 ?>

 <!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
	<title>Formulário de Cadastro</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <style type="text/css">

    	#tamanhoContainer{
    		width: 500px; 

    	}

    	#botao {
    		background-color: #FF1168; /*cor de fundo*/
    		color: #FFFFFF; /*cor da letra*/
    	}
    </style>

</head>
<body>

<div class="container" style="margin-top: 40px" id="tamanhoContainer">
	<h4>Formulário de Cadastro</h4>

<form  action="_atualizar_produto.php" method="post" style="margin-top: 20px">
  <?php 

    $sql = "SELECT * FROM estoque WHERE id_estoque = $id";
    $busca = mysqli_query($conexao,$sql); 
    while ($array = mysqli_fetch_array($busca)){

          $id_estoque = $array['id_estoque'];
          $nroproduto = $array['nroproduto'];
          $nomeproduto = $array['nomeproduto'];
          $categoria = $array['categoria'];
          $quantidade = $array['quantidade'];
          $fornecedor = $array['fornecedor'];

     

   ?>
  <div class="form-group">
    <label>Nro Produto</label>
    <input type="number" class="form-control" name="nroproduto" value="<?php echo $nroproduto ?>" disabled>
    <input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none">
  </div>

  <div class="form-group">
    <label>Nome do Produto</label>
    <input type="text" class="form-control" name="nomeproduto" value="<?php echo $nomeproduto ?>">
  </div>
  
  <div class="form-group">
    <label>Categoria</label>
    <select class="form-control" name="categoria" >
      <option>Periféricos</option>
      <option>Hardware</option>
      <option>Software</option>
      <option>Celulares</option>
    </select>
  </div>

  <div class="form-group">
    <label>Quantidade</label>
    <input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">
  </div>

  <div class="form-group">
    <label>Fornecedor</label>
    <select class="form-control" name="fornecedor" >
      <option>Fornecedor A</option>
      <option>Fornecedor B</option>
      <option>Fornecedor C</option>
    </select>
  </div>
  <div style="text-align: right;">
  <button id="botao" type="submit" class="btn btn-sm" >Atualizar</button>
  </div>	
  <?php } ?>
</form>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>