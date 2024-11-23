<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastro Locadora</title>
<link rel="stylesheet" type="text/css" href="../css/form.css">

</head>
<body>
    

<?php
include "conn.php";

$nome = $_POST['nome'];
$nascimento = $_POST['dataNascimento'];
$cpf = $_POST['cpf'];
$telefone = $_POST['numero'];
$cnh = $_POST['cnh'];
$senha = $_POST['senha'];

$sql = "SELECT cpf_cliente FROM cliente WHERE $cpf = cpf_cliente ";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo "<H1>USUARIO JÁ CADASTRADO</H1>";
    

} else {
    $conn->query(query: "INSERT INTO cliente (codigo_cliente, nome_cliente, data_nascimento_cliente, numero_cnh_cliente,  telefone_cliente, cpf_cliente,   senha_cliente) VALUES (NULL, '$nome', '$nascimento','$cnh', '$telefone', '$cpf',  '$senha')");
    echo"<h2> Dados Salvos com Sucesso</h2>";
    header("refresh:5; url=../index.html");


    $sql = "SELECT codigo_cliente, nome_cliente, data_nascimento_cliente,numero_cnh_cliente, telfone_cliente, cnh_cliente, senha_cliente FROM cliente";
    $result = $conn->query($sql);
    
    if ($result -> num_rows > 0) {
        echo "<h1>Usuário já cadastrado</h1>";
        echo "";
    
        echo "<table>
        <tr>
        <th>Nome</th>
        <th>Cpf</th>
        <th>Numero</th>
        <th>CNH</th>
        <th>Senha</th>
        <th Colspan=2>Ação</th>
        <th></th>
    
    </tr>";
    
    
    
    echo "</table>";
    } else {
    echo "<h1>Nenhum resultado encontrado</h1>";
    }
}
$conn->close();

?>