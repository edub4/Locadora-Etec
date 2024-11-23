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

$sql = "SELECT codigo_cliente, nome_cliente, cpf_cliente, telefone_cliente, numero_cnh_cliente, senha_cliente FROM cliente";

$result = $conn->query($sql);

// Verifique se há resultados
if ($result && $result->num_rows > 0) {
    echo "<table>
    <tr>
    <th>CODIGO_CLIENTE</th>
    <th>NOME</th>
    <th>CPF</th>
    <th>NUMERO</th>
    <th>CNH</th>
    <th>SENHA</th>
    <th colspan='2'>Ação</th>
    </tr>";


    // Exiba os resultados
    while ($row = $result->fetch_assoc()) 
    {
        echo "<tr>";
        echo "<td>{$row['codigo_cliente']}</td>";
        echo "<td>{$row['nome_cliente']}</td>";
        echo "<td>{$row['cpf_cliente']}</td>";
        echo "<td>{$row['telefone_cliente']}</td>";
        echo "<td>{$row['numero_cnh_cliente']}</td>";
        echo "<td>{$row['senha_cliente']}</td>";
        
    }

    echo "</table>";
} else {
    echo "<h1>Nenhum resultado encontrado</h1>";
    header("Refresh: 3; url=../html/cadastrar.html");
}

$conn->close();

?>

</body>
</html>