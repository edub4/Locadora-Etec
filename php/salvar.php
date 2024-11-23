<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cadastro Locadora</title>
<link rel="stylesheet" type="text/css" href="../css/form.css">

</head>
<?php
include 'conn.php';
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$numero = $_POST['numero'];
$cnh = $_POST['cnh'];
$senha = $_POST['senha'];
