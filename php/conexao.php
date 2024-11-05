<?php
//Informações para conectar no banco de dados

$servidor = 'localhost';
$usuario = 'root';
$db = 'db_contabilidade';
$senha = 'root';

$conexao = new mysqli($servidor,$usuario,$senha,$db) ;

if ($conexao ->connect_error) {
    die ('Falha na Conexão' . $conexao->connect_error);
}else{
    echo "Conectado com sucesso";
}

?>