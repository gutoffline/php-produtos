<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produtos</title>
</head>
<body>
    <header>
        <h1>Lojas BemBom</h1>
        <a href="https://google.com?q=bembom" target="_blank">Pesquisa no Google</a>
    </header>

    <main>
        <form method="post" action="salvar.php">
            Nome: <input name="nome"><br>
            Quantidade: <input type="number" name="qtd"><br>
            Preço: <input name="preco" required><br>
            <button type="submit">Salvar</button>
            <button type="reset">Limpar</button>
        </form>
    </main>

    <footer>
        <p>Feito pelo <strong>Guto Xavier</strong></p>
    </footer>
</body>
</html>