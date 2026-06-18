<?php
include "inc-cabecalho.php";
include "inc-conexao.php";
?>
<main>
    <h1>Listagem de produtos</h1>
    <a href="form-cadastrar.php">Novo produto</a>
    <a href="relatorio-pdf-bd.php">Relatório</a>
    <table border="2">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Preço</th>
            <th>Ações</th>
        </tr>
        <?php
        $sql = "select * from tb_produtos";
        $resultado = mysqli_query($conexao, $sql);
        while($linha = mysqli_fetch_assoc($resultado)){
            echo "<tr>";
            echo "<td>{$linha['id']}";
            echo "<td>{$linha['nome']}";
            echo "<td>{$linha['qtd']}";
            echo "<td>{$linha['preco']}";
            echo "<td>
                        <a href='deletar.php?id={$linha['id']}'>Deletar</a>
                        <a href='visualizar.php?id={$linha['id']}'>Visualizar</a>
                        <a href='form-alterar.php?id={$linha['id']}'>Editar</a>
                    </td>";
            echo "</tr>";
        }
        mysqli_close($conexao);
        ?>
    </table>
</main>
<?php
include "inc-rodape.php";
?>