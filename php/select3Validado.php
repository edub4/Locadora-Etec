<?php
include 'conn.php';
include 'validacao.php';

verificarSessao();

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
        <a href="./agencias.php">Voltar</a>
        </div>
</header><?php
include("conn.php");

if (isset($_POST['nomeagencia']) && !empty($_POST['nomeagencia'])) {
    $nomeagencia = $_POST['nomeagencia'];
    $nomeagencia = $conn->real_escape_string($nomeagencia);
    
    $sql = "SELECT * FROM locadora WHERE nome_locadora LIKE '%$nomeagencia%'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Nome da Locadora: " . $row['nome_locadora'] . "<br>";
            echo "CNPJ: " . $row['cnpj_locadora'] . "<br>";
            echo "Endereço: " . $row['endereco_locadora'] . "<br>";
            echo "Telefone: " . $row['telefone_locadora'] . "<br><br>";
        }
    } else {
        echo "<script>alert('Nenhuma locadora encontrada.')</script>";
    }
} else {
    echo "<script>alert('Por favor, insira um nome de agência para buscar.')</script>";
    header("refresh:1; url=./agencias.php");
}

$conn->close();
?>

</body>
</html>