<?php
include 'conn.php';
include 'validacao.php';

verificarSessao();

$localRetirada = $_POST['localRetirada'];
$dataIda = $_POST['dataIda'];
$horaIda = $_POST['horaIda'];
$localDevolucao = $_POST['localDevolucao'];
$dataDevolucao= $_POST['dataDevolucao'];
$horaDevolucao = $_POST['horaDevolucao'];

$sql = "SELECT nome_veiculo, codigo_veiculo FROM veiculo";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOVETEC</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="voltar">
        <a href="./index.php">Voltar</a>
        </div>
    </header>
    <main>
        <div class="container form">
            <form action="./salvarLocacao.php" method="post">
                <div class="formInput">
                    <input type="text" name="localRetirada" id="localRetirada" value="<?php echo"$localRetirada" ?>">
                        <div class="labelLinha">Digite o local de retirada</div>
                        <img src="./img/icone/local.svg" alt="">
                    </div>
                    <div class="formInput">
                        <input type="date" name="dataIda" id="dataIda" value="<?php echo"$dataIda" ?>">
                        <div class="labelLinha">Data da retirada</div>
                    </div>
                    <div class="formInput">
                        <input type="time" name="horaIda" id="horaIda" value="<?php echo"$horaIda"?>" >
                        <div class="labelLinha">Hora da devolução</div>
                    </div>
                    <div class="formInput">
                        <input type="text" name="localDevolucao" id="localDevolucao" value=" <?php echo"$localDevolucao" ?>">
                        <div class="labelLinha">Digite o local de devolução</div>
                        <img src="./img/icone/local.svg" alt="">
                    </div>
                    <div class="formInput">
                        <input type="date" name="dataDevolucao" id="dataDevolucao" value="<?php echo"$dataDevolucao" ?>">
                        <div class="labelLinha">Data da devolução</div>
                    </div>
                    <div class="formInput">
                        <input type="time" name="horaDevolucao" id="horaDevolucao" value="<?php echo"$horaDevolucao" ?>">
                        <div class="labelLinha">Hora da devolução</div>
                    </div>
                    <div class="formselect">
                    <label for="carro">Selecione um carro:</label>
                        <select name="carro" id="carro">
                            <?php
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='" . htmlspecialchars($row['codigo_veiculo']) . "'>" . htmlspecialchars($row['nome_veiculo']) . "</option>";
                                    }
                                }
                                else {
                                    echo "<option value=''>Nenhum carro disponível</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <button type="submit" class="btnVerde">
                        CONTINUAR
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>