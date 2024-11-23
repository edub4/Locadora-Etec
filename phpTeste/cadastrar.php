<?php
include "conn.php";

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['numero'];
$senha = $_POST['cnh'];
$senha = $_POST['senha'];

$sql = "SELECT cpf FROM !!!!! WHERE $cpf = cpf ";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0){
    echo "<H1>USUARIO JÁ CADASTRADO</H1>";
    header("refresh: 5; url=../html/cadastrar.html");
} else {
    $conn->query("INSERT INTO !!!() VALUE (NULL,)");
    echo"<h1> Salvo com sucesso</h1>";
    header("refresh:3; url=++++++++++++");

}
$conn->close();
?>