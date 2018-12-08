
<?php
require_once 'cria-cabecalho.php';
require_once 'class/Imovel.php';
  $id = $_GET['id'];

    $imovel = new Imovel($id);

criaCabecalho('Informações', array('css/informacao-do-imovel.css'));
?>

<article class="container" >
	<h2 id="tituloimovel">Apatamento no:</h2>
	<div class="row">

		<div class="col-lg-6 mb-6 mt-4">
			
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">


					<div class="carousel-item active">
<img class="d-block w-100" height="400"  src="img/<?= $imovel->getImagem() ?>" alt="First slide">
					</div>
					<div class="carousel-item ">
						<img class="d-block w-100" height="400"  src="img/<?= $imovel->getImagem() ?>" alt="First slide">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			
		
		<div id="informacoes" class="col-lg-6 mb-6 mt-4 mb-2" >
			<div class="row">
				<div id="vendo"  class="col-lg-12 mb-12">
					
                     <div id="iconi-casa">
              <div id="iconi-tamanho" class="fa fa-bed" aria-hidden="true">
                <span id="iconi-texto"><?=$imovel->getQuartos()?></span>
              </div>
              <div id="iconi-tamanho" class="fa fa-bath"><span id="iconi-texto"><?=$imovel->getBanheiros() ?></span></div>
               <div id="iconi-tamanho" class="fa fa-car" aria-hidden="true"><span id="iconi-texto"><?=$imovel->getGaragem() ?></span></div>
                </div>
					<p id="preco-imovel">Vendo por:</p>
				    <p id="preco-valor">

				    	<?=
                       number_format($imovel->getValor() , 2, ',', '.')
				    	?>

				    </p>
				
				
            </div>

			</div>
			<div class="row">
				<div  class="col-lg-12 mb-12">
					<p id="descricao-texto">
						<?= $imovel->getDescricao()?>
					</p>
				</div>
			</div>
			<div class="row">
				<div   class="col-lg-12 mb-12">
					<h1>Caracteristicas</h1>
					<table class="table table-bordered  table-hover">
						<thead>
							<tr id="texto-iformacao">
								<th>Tipo</th>
								<th>Área total</th>
								<th>Bairro</th>
							</tr>
						</thead>
						<tbody>
							<tr id="texto-iformacao">
								<td> <?= $imovel->getTipo()?></td>
								<td><?= $imovel->getArea()?></td>
								<td><?= $imovel->getBairro()?></td>
							</tr>


						</tbody>
					</table>
				</div>

			</div>
			<div class="row">
				<div   class="col-lg-12 mb-12">
					<h1>Informações: </h1>
					<table class="table table-bordered  table-hover">
						<thead>
							<tr id="texto-iformacao">
								<th>Quartos</th>
								<th>Banheiros</th>
								<th>Garagem</th>
							</tr>
						</thead>
						<tbody>

							<tr id="texto-iformacao">
								

								<td><?= $imovel->getQuartos() ?></td>
								<td><?= $imovel->getBanheiros() ?></td>
								<td><?= $imovel->getGaragem() ?></td>
							</tr>

						</tbody>
					</table>
				</div>
			</div>

        <div class="row">
				<div   class="col-lg-12 mb-12" id="informacoes-redes-sociasis">
				<div id="empresora"><img  src="svg/empresora.png"><a href="">imprimir imóvel</a></div>
				</div>
			</div>
		</div>
	</div>


</article>
<footer>
	<?php include_once'includ/footer.php'; ?>
</footer>