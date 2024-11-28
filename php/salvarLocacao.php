<?php
include "conn.php";
include 'validacao.php';

verificarSessao();

$cpf = $_SESSION['cpf_cliente'];
if (!isset($_SESSION['codigo_cliente']) || empty($_SESSION['codigo_cliente'])) {
    echo "<script>alert('Sessão expirada ou usuário não autenticado. Por favor, faça login novamente.');</script>";
    header("refresh:2; url=../html/logar.html");
    exit();
}

$codigo_cliente = $_SESSION['codigo_cliente'];
$localRetirada = $_POST['localRetirada'];
$dataIda = $_POST['dataIda'];
$horaIda = $_POST['horaIda'];
$localDevolucao = $_POST['localDevolucao'];
$dataDevolucao = $_POST['dataDevolucao'];
$horaDevolucao = $_POST['horaDevolucao'];
$codigoVeiculo = $_POST['carro'];

$dataInicio = new DateTime($dataIda);
$dataFim = new DateTime($dataDevolucao);
$diferencaDias = $dataFim->diff($dataInicio)->days;

if ($diferencaDias <= 0) {
    echo "<script>alert('A data de devolução deve ser posterior à data de retirada.');</script>";
    header("refresh:2; url=./index.php");
    exit();
}

$sql = "SELECT valor_diaria_veiculo FROM veiculo WHERE codigo_veiculo = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $codigoVeiculo);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $valorDiaria = $row['valor_diaria_veiculo'];

    $valorFinal = $valorDiaria * $diferencaDias;
    
    $dataIda = date('Y/m/d');
    $dataDevolucao= date('Y/m/d');

    $sqlInsert = "INSERT INTO locacao (data_inicial_locacao, data_final_locacao, valor_diaria_locacao, valor_final_locacao, codigo_cliente, codigo_veiculo)
    VALUES (?, ?, ?, ?, ?, ?)";
    $stmtInsert = $conn->prepare($sqlInsert);
    $stmtInsert->bind_param("ssdiii", $dataIda, $dataDevolucao, $valorDiaria, $valorFinal, $codigo_cliente, $codigoVeiculo);

    if ($stmtInsert->execute()) {
        echo "<script>alert('Dados salvos com sucesso!');</script>";
        header("refresh:1; url=./index.php");
    } else {
        echo "<script>alert('Erro ao salvar locação: " . $conn->error . "');</script>";
        header("refresh:2; url=./index.php");
    }
} else {
    echo "<script>alert('Veículo não encontrado.');</script>";
    header("refresh:2; url=./index.php");
}

$conn->close();
?>
