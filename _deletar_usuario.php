<?php 

include = "conexao.php";

$id = $_GET['id'];

$delete = "DELETE FROM usuarios WHERE id_usuario = $id";

$fila = mysql_query($conexao,$delete);

header("Location: aprovar_usuario.php"); //redireciona novamente para apágina de aprovação

 ?>