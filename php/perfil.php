<?php
include 'conn.php';
include 'validacao.php';

verificarSessao();


$cpf = $_SESSION['cpf_cliente'];
$codigo_cliente = $_SESSION['codigo_cliente'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastro Locadora</title>
<link rel="stylesheet" type="text/css" href="../css/form.css">
<link rel="stylesheet" href="../css/style.css">

</head>
<body>

<header>
        <div class="voltar">
        <a href="./index.php">Voltar</a>
        </div>
</header>
<?php

include "conn.php";

$sql = "SELECT codigo_cliente, nome_cliente, cpf_cliente, telefone_cliente, numero_cnh_cliente, senha_cliente FROM cliente where codigo_cliente = $codigo_cliente";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo"
    <table>
        <tr>
            <th>nome</th>
            <th>cpf</th>
            <th>telefone</th>
            <th>numero_cnh</th>
            <th>senha</th>
            <th>conta</th>

        </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td> $row[nome_cliente] </td>";
        echo "<td> $row[cpf_cliente] </td>";
        echo "<td> $row[telefone_cliente] </td>";
        echo "<td> $row[numero_cnh_cliente] </td>";
        echo "<td> $row[senha_cliente] </td>";
        echo "<td><a href='desloga.php'>Desloga</a></td>";
        ;
    }
    echo "</table>";
} else {
    echo "<h1>Nenhum resultado encontrado </h1>";
}

?>

</body>
</html>