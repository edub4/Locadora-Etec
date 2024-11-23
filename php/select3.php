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
$rm = $_GET['cpf'];
echo "$cpf";

$sql = "SELECT * FROM cliente WHERE $cpf = cpf";

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
        echo "<td>{$row['nome']}</td>";
        echo "<td>{$row['cpf']}</td>";
        echo "<td>{$row['numero']}</td>";
        echo "<td>{$row['cnh']}</td>";
        echo "<td>{$row['senha']}</td>";
        
    }

    echo "</table>";
} else {
    echo "<h1>Nenhum resultado encontrado</h1>";   
}

$conn->close();

?>

</body>
</html>