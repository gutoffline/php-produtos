<?php
$nome = $_POST['nome'];
$qtd = $_POST['qtd'];
$preco = $_POST['preco'];

include "inc-conexao.php";
$sql = "insert into tb_produtos(nome, qtd, preco) values('$nome',$qtd, $preco)";
$resultado = mysqli_query($conexao, $sql);

echo "inserido com sucesso!";

mysqli_close($conexao);
?>