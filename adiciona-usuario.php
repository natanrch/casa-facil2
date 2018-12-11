<?php

require_once 'class/Usuario.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$usuario = new Usuario();

$usuario->setNome($_POST['nome_cad']);
$usuario->setEmail($_POST['email_cad']);
$usuario->setSenha($_POST['senha_cad']);

var_dump($usuario);

$usuario->inserir();

header("Location: index.php");