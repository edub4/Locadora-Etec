<?php
function verificarSessao() {
    session_start();

    if (!isset($_SESSION['cpf_cliente']) || !isset($_SESSION['senha_cliente'])) {
        header("Location:../html/logar.html");
        exit();
    }
}
?>
