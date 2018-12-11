<?php

require_once 'class/Usuario.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
$email = $_POST['user_email'];
$senha = $_POST['user_password'];


$usuario = new Usuario();

$usuario->logar($email);

if ($email == $usuario->getEmail() && $senha == $usuario->getSenha()) {
	$_SESSION['email'] = $email;
	$_SESSION['usuario'] = $usuario->getNome();
	header("Location: publicar-imovel.php");
} else {
	session_destroy();
	header('Location: cadastro-cliente-login.php');
	
}

function estaLogado() {
	return isset($_SESSION['email']);
}

function verificaUsuario() {
	if(!estaLogado()) {
		header("Location: login.php");
	}
}