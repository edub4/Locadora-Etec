<?php
include 'conn.php';
include 'validacao.php';

verificarSessao();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Lovetec</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="imgFundo">
        <header>
            <div class="container header">
                <div class="logo">
                    <img src="../img/lovetec/LogoNome.png" alt="logo" id="logo">
                </div>
                <div class="pages">
                    <ul>
                        <li><a href="./carros.php">CARROS</a></li>
                        <li><a href="./agencias.php">AGÊNCIAS</a></li>
                        <li><a href="./viagens.php">VIAGENS</a></li>
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
            <div class="container alinhar">
                <form action="./locacao.php" method="post" enctype="multipart/form-data">
                    <div class="formInput">
                        <input type="text" name="localRetirada" id="localRetirada" >
                        <div class="labelLinha">Digite o local de retirada</div>
                        <img src="./img/icone/local.svg" alt="">
                    </div>
                    <div class="formInput">
                        <input type="date" name="dataIda" id="dataIda" >
                        <div class="labelLinha">Data da retirada</div>
                    </div>
                    <div class="formInput">
                        <input type="time" name="horaIda" id="horaIda" >
                        <div class="labelLinha">Hora da devolução</div>
                    </div>
                    <div class="formInput">
                        <input type="text" name="localDevolucao" id="localDevolucao" >
                        <div class="labelLinha">Digite o local de devolução</div>
                        <img src="./img/icone/local.svg" alt="">
                    </div>
                    <div class="formInput">
                        <input type="date" name="dataDevolucao" id="dataDevolucao" >
                        <div class="labelLinha">Data da devolução</div>
                    </div>
                    <div class="formInput">
                        <input type="time" name="horaDevolucao" id="horaDevolucao" >
                        <div class="labelLinha">Hora da devolução</div>
                    </div>
                <button type="submit" class="btnVerde">
                    CONTINUAR
                </button>
                </form>
            </div>
    </div>
    <main class="container carros">
        <div class="head">
            <h1>
                Alugue Um Carro Para Sua Proxima Viagem
            </h1>
        </div>
        <div class="cards">
            <div class="card">
                <div class="cardHead">
                    <h2>corro1 1.0, ou similar</h2>
                    <h3>Grupo B- Com Ar</h3>
                </div>
                <div class="cardBody">
                    <img src="../img/carros/carro1.jpeg" alt="carro1">
                    <button type="submit" class="btnRoxo">RESERVE AGORA</button>
                </div>
                
            </div>
            
            <div class="card">
                <div class="cardHead">
                    <h2>corro1 1.0, ou similar</h2>
                    <h3>Grupo B- Com Ar</h3>
                </div>
                <div class="cardBody">
                    <img src="../img/carros/carro1.jpeg" alt="carro1">
                    <button type="submit" class="btnRoxo">RESERVE AGORA</button>
                </div>
            </div>
            
            <div class="card">
                <div class="cardHead">
                    <h2>corro1 1.0, ou similar</h2>
                    <h3>Grupo B- Com Ar</h3>
                </div>
                <div class="cardBody">
                    <img src="../img/carros/carro1.jpeg" alt="carro1">
                    <button type="submit" class="btnRoxo">RESERVE AGORA</button>
                </div>
            </div>
        </div>
        <a href="./html/carros.html"><button class="btnSemFundo" >CONFIRA MAIS CARROS</button></a>
    </main>
    <section>
        <div class="container lugar">
            <h2>Dicas De Viagem</h2>
            <div class="lugares">
                <div class="local">
                    <a href="">
                        <img src="../img/locais/rioDeJaneiro.jpg" alt="distritoFederal">
                        <h3>Niteroi - RJ</h3>
                        <p>O que fazer em Niteroi, RJ</p>
                    </a>
                </div>
                
                <div class="local">
                    <a href="">
                        <img src="../img/locais/distritoFederal.jpg" alt="distritoFederal">
                        <h3>Brasilia - DF</h3>
                        <p>O que fazer em Brasilia, DF</p>
                    </a>
                </div>
                
                <div class="local">
                    <a href="">
                        <img src="../img/locais/ouro-preto-mg.jpg" alt="distritoFederal">
                        <h3>Ouro Preto -MG</h3>
                        <p>O que fazer em Ouro Preto, MG</p>
                    </a>
                </div>
                
                <div class="local">
                    <a href="">
                        <img src="../img/locais/Paraiba.jpg" alt="distritoFederal">
                        <h3>Joao Pessoa - PB</h3>
                        <p>O que fazer em Brasilia, DF</p>
                    </a>
                </div>
            </div>
            <button class="btnSemFundo">VEJA MAIS DICAS DE VIAGENS</button>
        </div>
    </section>
    <footer>
        <div class="container">
            <img src="./img/lovetec/logoNome.png" alt="">
            <p>copyright &copy</p>
        </div>
    </footer>
</body>
</html>