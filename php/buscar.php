<!doctype html>
<html lang="pt-br">
 
<head>
  <title>Buscar Dados</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
 
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<body>
  <div class="container">
    <header>
      <h1>Buscar</h1>
    </header>
    <main>
      <form action="../php/select3.php" method="post" enctype="multipart/form-data">
           
      <div class="formInput">
                    <input type="text" name="nome" id="nome" required>
                    <div class="labelLinha" for="nome">Nome</div>
                </div>
                
                <div class="formInput">
                    <input type="text" name="cpf" id="cpf" required>
                    <div class="labelLinha" for="cpf">CPF</div>
                </div>
                
                <div class="formInput">
                    <input type="email" name="email" id="email" required>
                    <div class="labelLinha" for="email">Email</div>
                </div>
                
                <div class="formInput">
                    <input type="tel" name="numero" id="numero" required>
                    <div class="labelLinha" for="numero">Numero de Telefone</div>
                </div>
                
                <div class="formInput">
                    <input type="text" name="cnh" id="cnh" required>
                    <div class="labelLinha" for="cnh">CNH</div>
                </div>
                
                <div class="formInput">
                    <input type="password" name="senha" id="senha" required>
                    <div class="labelLinha" for="senha">Senha</div>
                </div>

                <button type="submit" class="btnVerde">
                    BUSCAR
                </button>
            </form>
        </div>
    </main>

    <footer>
      <!-- place footer here -->
    </footer>
  </div>
  <!-- Bootstrap JavaScript Libraries -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
 
</html>