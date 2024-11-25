<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastro Locadora</title>
<link rel="stylesheet" type="text/css" href="../css/form.css">
   
</Style>
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
$nascimento = date('Y/m/d');

$sql = "SELECT `cpf_cliente` FROM `cliente` WHERE $cpf = cpf_cliente ";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo "<H6>USUARIO JÁ CADASTRADO</H6>";
    header("refresh:3 url=../html/cadastrar.html");

} else {
    $conn->query(query: "INSERT INTO cliente (codigo_cliente, nome_cliente, data_nascimento_cliente, numero_cnh_cliente,  telefone_cliente, cpf_cliente,   senha_cliente) VALUES (NULL, '$nome', '$nascimento','$cnh', '$telefone', '$cpf',  '$senha')");
    echo"<h6> Dados Salvos com Sucesso</h6>";
    header("refresh:3; url=./perfil.php");
}
$conn->close();

?>
<body>
</html>