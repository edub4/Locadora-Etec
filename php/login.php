<?php
include 'conn.php';

session_start();

$cpf = $_POST['cpf'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM cliente WHERE cpf_cliente = ? AND senha_cliente = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $cpf, $senha);

$stmt->execute();
$result = $stmt->get_result();

if(mysqli_num_rows ($result) > 0 ){
$_SESSION['cpf'] = $cpf;
$_SESSION['senha'] = $senha;
header('location:index.php');
}
else{
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
    echo ("alert('senha ou cpf errado')");
    header("refresh:3; url=../html/logar.html");
}

?>