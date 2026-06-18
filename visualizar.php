<?php
$id = $_GET['id'];
include "inc-cabecalho.php";
include "inc-conexao.php";

$nome = $qtd = $preco = "";

$sql = "select * from tb_produtos where id = $id";
$resultado = mysqli_query($conexao, $sql);
while($linha = mysqli_fetch_assoc($resultado)){
    $nome = $linha['nome'];
    $qtd = $linha['qtd'];
    $preco = $linha['preco'];
}
mysqli_close($conexao);
?>
<main>
    <h1>Produto #<?= $id ?></h1>
    Código: <?= $id ?> <br>
    Nome: <?= $nome ?><br>
    Quantidade: <?= $qtd ?><br>
    Preço: <?= $preco ?><br>
</main>
<?php
include "inc-rodape.php";
?>