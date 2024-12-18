
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
    <title>Locadora Etec</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <div class="container header">
            <div class="logo">
                <a href="./index.php">
                    <img src="../img/lovetec/LogoNome.png" alt="logo" id="logo">
                </a>
            </div>
            <div class="pages">
                <ul>
                    <li><a href="./carros.php">CARROS</a></li>
                    <li><a href="./agencias.php">AGÊNCIAS</a></li>
                    <li><a href="./index.php">VIAGENS</a></li>
                </ul>
            </div>
            <div class="log">
                <div class="reserva">
                    <a href="./reservas.php"><img src="../img/icone/directions_car_24dp_5F6368_FILL0_wght400_GRAD0_opsz24.svg" alt="">MINHAS RESERVAS</a>
                </div>
                <div class="nomeCliente">
                    <img src="../img/icone/person_24dp_5F6368_FILL0_wght400_GRAD0_opsz24.svg" alt="">
                    <a href="./perfil.php"><?php  echo $_SESSION['nome_cliente']; ?></a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container agencia">
            <h1>Buscar Agências Cadastradas</h1>
        
            <form action="../php/select3Validado.php" method="post" enctype="multipart/form-data">
                
                <div class="formInput">
                    <input type="text" name="localRetirada" id="localRetirada" >
                    <div class="labelLinha">Nome Agencia</div>
                    <img src="./img/icone/local.svg" alt="">
                </div>
                
                <button type="submit" class="btnVerde">CONTINUAR</button>
            </form>
        </div>
    </main>
</body>
</html>