<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanche - Inserir</title>
    <link rel="stylesheet" href="estilo.css" />
</head>
<body>
<?php
//1º USAR O ARQUIVO DE CONEXÃO
include "conexao_bd.php";


//2º CAPTURAR OS DADOS PARA INSERÇÃO
$descricao = $_POST["txtDescricao"];
$localizacao = $_POST["txtLocalizacao"];
$responsavel = $_POST["txtResponsavel"];

//3º MONTAR O COMANDO SQL
$sql = "INSERT INTO filial(descricao,localizacao,responsavel) VALUES ('$descricao','$localizacao','$responsavel')";

//4º EXECUTAR O COMANDO NO BANCO DE DADOS

if (executarComando($sql))
{
    echo "<h1>Serviço inserido</h1>";
}
else
{
    echo "<h1>Erro!</h1>";
}
?>

    
</body>
</html>