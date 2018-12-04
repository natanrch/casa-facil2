<?php

require_once 'class/Conexao.php';

class Imovel
{
	private $id;
	private $proprietario; 
	private $endereco;
	private $bairro;
	private $area;
	private $tipo;
	private $valor;
	private $imagem;
	private $titulo;
	private $descricao;
	private $alugarOuVender;
	private $quartos;
	private $banheiros;
	private $garagem;

	public function __construct($id = false)
	{
		if ($id) {
			$this->id = $id;
			$this->carregar();
		}
	}

    public function carregar()
    {
        $conexao = Conexao::pegarConexao();
    	$query = "SELECT * FROM imoveis where id = ".$this->id;
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach ($lista as $linha) {
            $this->id = $linha['id'];
            $this->endereco = $linha['endereco'];
            $this->bairro = $linha['bairro'];
            $this->area = $linha['area'];
            $this->tipo = $linha['tipo'];
            $this->valor = $linha['valor'];
            $this->imagem = $linha['imagem'];
            $this->titulo = $linha['titulo'];
            $this->descricao = $linha['descricao'];
            $this->alugarOuVender = $linha['alugar_ou_vender'];
            $this->quartos = $linha['numero_de_quartos'];
            $this->banheiros = $linha['numero_de_banheiros'];
            $this->garagem = $linha['garagem'];
        }

    }

	public function listar()
    {
        $query = "SELECT * FROM imoveis";
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

	public function listarPorBairro($bairro)
    {
        $query = "SELECT * FROM imoveis where bairro LIKE '%".$bairro."%'";
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

	public function listarPorTipo($tipo)
    {
        $query = "SELECT * FROM imoveis where tipo LIKE '%".$tipo."%'";
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }

	public function inserir()
	{
		$query = "INSERT INTO `imoveis` (`id`, `usuario_id`, `endereco`, `bairro`, `area`, `tipo`, `valor`, `imagem`, `titulo`, `descricao`, `alugar_ou_vender`, `numero_de_quartos`, `numero_de_banheiros`, `garagem`) VALUES 
		(NULL, 
		'".$this->proprietario."', 
		'".$this->endereco."', 
		'".$this->bairro."', 
		'".$this->area."', 
		'".$this->tipo."', 
		'".$this->valor."', 
		'".$this->imagem."', 
		'".$this->titulo."', 
		'".$this->descricao."', 
		'".$this->alugarOuVender."', 
		'".$this->quartos."', 
		'".$this->banheiros."', 
		'".$this->garagem."')";
        $conexao = Conexao::pegarConexao();
        $conexao->exec($query);

	}

	//faltam demais atributos

	// public function __construct($proprietario, $endereco, $bairro, $area, $tipo, $valor, $imagem, $titulo, $descricao) {
	// 	$this->proprietario = $proprietario;
	// 	$this->endereco = $endereco;
	// 	$this->bairro = $bairro;
	// 	$this->area = $area;
	// 	$this->tipo = $tipo;
	// 	$this->valor = $valor;
	// 	$this->imagem = $imagem;
	// 	$this->titulo = $titulo;
	// 	$this->descricao = $descricao;
	// }

	// public function setId($id) {
	//  	$this->id = $id;
	// }

	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}
	public function setProprietario($proprietario) {
		$this->proprietario = $proprietario;
	}
	public function getProprietario() {
		return $this->proprietario;
	}

	public function setEndereco($endereco) {
		$this->endereco = $endereco;
	}
	public function getEndereco() {
		return $this->endereco;
	}

	public function setBairro($bairro) {
		$this->bairro = $bairro;
	}
	public function getBairro() {
		return $this->bairro;
	}

	public function setArea($area) {
		$this->area = $area;
	}
	public function getArea() {
		return $this->area;
	}

	public function setTipo($tipo) {
		$this->tipo = $tipo;
	}
	public function getTipo() {
		return $this->tipo;
	}

	public function setValor($valor) {
		$this->valor = $valor;
	}
	public function getValor() {
		return $this->valor;
	}

	public function setImagem($imagem) {
		$this->imagem = $imagem;
	}
	public function getImagem() {
		return $this->imagem;
	}

	public function setTitulo($titulo) {
		$this->titulo = $titulo;
	}
	public function getTitulo() {
		return $this->titulo;
	}

	public function setDescricao($descricao) {
		$this->descricao = $descricao;
	}
	public function getDescricao() {
		return $this->descricao;
	}

	public function setAlugarOuVender($alugarOuVender) {
		$this->alugarOuVender = $alugarOuVender;
	}
	public function getAlugarOuVender() {
		return $this->alugarOuVender;
	}


	public function setQuartos($quartos) {
		$this->quartos = $quartos;
	}
	public function getQuartos() {
		return $this->quartos;
	}

	public function setBanheiros($banheiros) {
		$this->banheiros = $banheiros;
	}
	public function getBanheiros() {
		return $this->banheiros;
	}

	public function setGaragem($garagem) {
		$this->garagem = $garagem;
	}
	public function getGaragem() {
		return $this->garagem;
	}

}
