<?php
$conexao = mysqli_connect("localhost","root","","bd_produtos2");
if(!$conexao){
    die("Erro: " . mysqli_connect_error());
}
?>