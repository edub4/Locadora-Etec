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

$sql = "SELECT `codigo_locacao`, `data_inicial_locacao`, `data_final_locacao`,`valor_diaria_locacao`, `valor_final_locacao`from locacao where codigo_cliente = $codigo_cliente";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo"
    <table>
        <tr>
            <th>data inicial</th>
            <th>data final</th>
            <th>valor da diaria</th>
            <th>valor final</th>

        </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td> $row[data_inicial_locacao] </td>";
        echo "<td> $row[data_final_locacao] </td>";
        echo "<td> $row[valor_diaria_locacao] </td>";
        echo "<td> $row[valor_final_locacao] </td>";
        //echo "<td><a href='alterar.php'>Alterar</a></td>";
        //echo "<td><a href='excluir.php?rm={$row['rm']}'>Excluir</a></td>";
        ;
    }
    echo "</table>";
} else {
    echo "<h1>Nenhum resultado encontrado </h1>";
}

?>

</body>
</html>