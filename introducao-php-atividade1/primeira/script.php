<?php
session_start();

$nome = $_POST['nome'];
$idade = $_POST['idade'];

$um_dia = time() + 86400;

setcookie('nome', $nome, $um_dia, "/");
$_SESSION['idade'] = $idade;

header('Location: boasvindas.php');
