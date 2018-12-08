<?php
require_once 'cria-cabecalho.php';
require_once 'class/Imovel.php';

if(isset($_GET['busca'])) {

	$bairro = $_GET['busca'];

	$imovel = new Imovel();
	$lista = $imovel->listarPorBairro($bairro);
	$resultado = $bairro;
	
}

if(isset($_GET['tipo'])) {

	$tipo = $_GET['tipo'];

	$imovel = new Imovel();
	$lista = $imovel->listarPorTipo($tipo);
	$resultado = $tipo;
	
}
criaCabecalho('pesquisa', array('css/pesquisa.css'));




?>





<div class="container mt-2" id="pesquisa-principal">

	<div class="row">
		<div id="pesquisa-titulo-busca" class="col-md-12">
			<h2>resultado para : <?= $resultado ?></h2>
		</div>
	</div>
	<?php
	
	foreach ($lista as $l):
		
		?>
		<div class="card mt-3 mb-3" style="border-radius: 0px">
			
			<div class="row no-gutters ">
				<div class="col-md-4">
					<div class=" row no-gutters">
						<div class="col-md-12">
							<div id="pesquisa-tipos" >
								<?= $l['tipo'] ?>
							</div>
							<div id="pesquisa-alugar-vender"  >
								<?= $l['alugar_ou_vender']?>
							</div>
							<a href="informacao-do-imovel.php?id=<?= $l['id'] ?>">
								<img  id="img" class="img_hover card__img" src="img/<?= $l['imagem'] ?>"   >
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-8 ">
					<div class=" row no-gutters">
						<div class="card-group col-md-12 ">
							<div class="card  " id="pesquisa-card-infomacao">
								<div class="card-header" >
									<div  id="pesquisa-titulo">
										<?= $l['titulo'] ?>

									</div>
									<div  id="macapa-ap">Macapá-AP</div>
									<div id="pesquisa-preco" >R$:
										<?=
										
								 number_format($l['valor'], 2, ',', '.');
										?>
									</div>
									
								</div>
								<div class="card-body">
									<div id="iconi-casa">
										<div id="iconi-tamanho" class="fa fa-bed" aria-hidden="true">
											<span id="iconi-texto"><?= $l['numero_de_quartos'] ?></span>
										</div>
										<div id="iconi-tamanho" class="fa fa-bath"><span id="iconi-texto"><?= $l['numero_de_banheiros'] ?></span></div>
										<div id="iconi-tamanho" class="fa fa-car" aria-hidden="true"><span id="iconi-texto"><?= $l['garagem'] ?></span></div>
									</div>
									<p class="card-text"><?= $l['descricao'] ?></p>
								</div>

							</div>

						</div>
					</div>
				</div>

			</div>
			
		</div>
	<?php endforeach ?>
	<div class="row">
		<div id="pesquisa-titulo-busca" class="col-md-12">
			
		</div>
	</div>
</div> 			








<footer>

	<?php include_once'includ/footer.php'; ?>
</footer>