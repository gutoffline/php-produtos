<?php
$id = $_GET['id'];

include "inc-conexao.php";
$sql = "delete from tb_produtos where id = $id";
$resultado = mysqli_query($conexao, $sql);
echo "excluido com sucesso!";
mysqli_close($conexao);
?>