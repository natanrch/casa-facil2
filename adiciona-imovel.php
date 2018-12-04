<?php

require_once 'class/Imovel.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//trata arquivo imagem
$imagem = $_FILES['imagem'];
$nomeImagem = $imagem['name'];
$nomeTempImagem = $imagem['tmp_name'];
move_uploaded_file($nomeTempImagem, 'img/'.$nomeImagem);



$imovel = new Imovel();

$imovel->setProprietario(1);

$imovel->setTitulo($_POST['titulo']);
$imovel->setTipo($_POST['tipo']);
$imovel->setValor($_POST['valor']);
$imovel->setDescricao($_POST['descricao']);
$imovel->setEndereco($_POST['endereco']);
$imovel->setBairro($_POST['bairro']);
$imovel->setQuartos($_POST['quartos']);
$imovel->setBanheiros($_POST['banheiros']);
$imovel->setGaragem($_POST['garagem']);
$imovel->setArea($_POST['area']);
$imovel->setAlugarOuVender($_POST['alugar_ou_vender']);
$imovel->setImagem($nomeImagem);

var_dump($imovel);

$imovel->inserir();
header("Location: index.php");