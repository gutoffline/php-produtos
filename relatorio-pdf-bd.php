<?php
//incluir o autoloader
require_once 'dompdf/autoload.inc.php';

include "inc-conexao.php";
$sql = "select * from tb_produtos";
$resultado = mysqli_query($conexao, $sql);

$relatorio = "<table border='2'>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Preço</th>
        </tr>";

while($linha = mysqli_fetch_assoc($resultado)){
    $resultado = "<tr><td>". $linha['id'] . "<td>" . $linha['nome']. "<td>" . $linha['qtd'] . "<td>" . $linha['preco']. "</tr>";
}
mysqli_close($conexao);

//Referencias necessárias
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($relatorio);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait'); //portrait = folha de pé , landscape = folha deitada

// Render the HTML as PDF
$dompdf->render();
ob_end_clean();
// Output the generated PDF to Browser
$dompdf->stream("vendas.pdf", array("Attachment" => true)); // true = download, false = navegador
?>