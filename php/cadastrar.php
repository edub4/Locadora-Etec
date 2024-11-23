<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastro Locadora</title>
<link rel="stylesheet" type="text/css" href="../css/form.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <Style>
body{
    margin-top: 300px;
    display: flex;
    justify-content: center;
    align-items: center;
}
h6{
    font-size: xx-large;
    margin: 0 auto;
}
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
$newNascimento = DateTime::createFromFormat('Y-m-d', $nascimento);

$sql = "SELECT cpf_cliente FROM cliente WHERE $cpf = cpf_cliente ";
$result = $conn->query($sql);

if ($result->num_rows > 0){
    echo "<H6>USUARIO JÁ CADASTRADO</H6>";
    header("refresh:3 url=../html/cadastrar.html");

} else {
    $conn->query(query: "INSERT INTO cliente (codigo_cliente, nome_cliente, data_nascimento_cliente, numero_cnh_cliente,  telefone_cliente, cpf_cliente,   senha_cliente) VALUES (NULL, '$nome', '$newNascimento','$cnh', '$telefone', '$cpf',  '$senha')");
    echo"<h6> Dados Salvos com Sucesso</h6>";
    header("refresh:3; url=./perfil.php");
}
$conn->close();

?>
<body>
</html>