<?php


<?php
include 'conexao.php';
 
//receber os dados do formulário
$nomeCompleto=$_POST['nome'];
$tipo=$_POST['tipo'];
$descricao=$_POST['descricao'];
 
 
 
$sql="INSERT INTO tb_categoria values (null,'$nomeCompleto','$tipo','$descricao')";
 
if ($conexao->query($sql)) {
    echo "<script>alert('Inserido com sucesso!'); history.back();</script>";
}else {
    echo "Falha na conexão com banco de dados";
}
 