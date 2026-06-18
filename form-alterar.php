<?php
$id = $_GET['id'];

include "inc-conexao.php";
include "inc-cabecalho.php";

$nome = $qtd = $preco = "";
$sql = "select * from tb_produtos where id = $id";
$resultado = mysqli_query($conexao, $sql);

while($linha = mysqli_fetch_assoc($resultado)){
    $nome = $linha['nome'];
    $qtd = $linha['qtd'];
    $preco = $linha['preco'];
}
?>
<main>
    <h1>Produto #<?= $id ?></h1>
    <form method="post" action="salvar-alteracao.php?id=<?= $id ?>">
        Nome: <input name="nome" value="<?= $nome ?>"><br>
        Quantidade: <input type="number" name="qtd" value="<?= $qtd?>"><br>
        Preço: <input name="preco" value="<?= $preco ?>"><br>
        <button type="submit">Salvar</button>
    </form>
</main>
<?php
mysqli_close($conexao);
include "inc-rodape.php";
?>