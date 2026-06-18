<?php
$id = $_GET['id'];
$nome = $_POST['nome'];
$qtd = $_POST['qtd'];
$preco = $_POST['preco'];

include "inc-conexao.php";

$sql = "update tb_produtos set nome='{$nome}', qtd={$qtd}, preco={$preco} where id={$id}";
$resultado = mysqli_query($conexao, $sql);

mysqli_close($conexao);
header('Location:listar.php');
?>