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

if (mysqli_num_rows($result) > 0) {
    $user = $result->fetch_assoc();

    $_SESSION['codigo_cliente'] = $user['codigo_cliente'];
    $_SESSION['nome_cliente'] = $user['nome_cliente'];
    $_SESSION['cpf_cliente'] = $cpf;
    $_SESSION['senha_cliente'] = $senha;

    header('Location: index.php');
    exit;
} else {
    
    unset($_SESSION['cpf_cliente']);
    unset($_SESSION['senha_cliente']);
    echo"<script>alert('senha ou CPF incorreto')</script>";
    header("refresh:0; url=../html/logar.html");
    exit;
}
?>
