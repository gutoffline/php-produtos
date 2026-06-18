<?php
$conexao = mysqli_connect("localhost","root","","bd_produtos");
if(!$conexao){
    die("Erro: " . mysqli_connect_error());
}
?>