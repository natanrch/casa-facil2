<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once ('class/Imovel.php');

$imovel = new Imovel();
$lista = $imovel->listar();



?>
<div class="container" id="artigo">
 <div class="row">

  <div class="col-lg-12 col-sm-12 " id="artigo-titulo" >
    <h1>Imóveis em destaque</h1>
  </div>
</div>

 <div class="row no-gutters">

 
<?php
foreach ($lista as $l):
  
  ?>
 <div class="col-lg-4 col-sm-4 "   >
  
 <div class="card-group m-2">
<div class="card" id="artigo-card">

  <a  href="informacao-do-imovel.php?id=<?= $l['id'] ?>" >
    <img id="img" class="img-top "  src="img/<?= $l['imagem'] ?>" class="img_hover card__img " alt=""></a>
    <div id="tipo-imovel"><?= $l['tipo'] ?></div>
    <div id="alugar-vender"><?= $l['alugar_ou_vender'] ?></div>
    <div class="card-body">

      <div class="card-text">
         <a href="informacao-do-imovel.php?id=<?= $l['id'] ?>"  >
       <span id="titulo-imovel"> <?= $l['titulo'] ?><br></span>
     </a>
       <div id="macapa-ap">Macapá-AP</div>
     </div>
   </div>
   <div class="card-footer" id="card-rodape">
     <span id="preco">
R$
      <?=
 number_format($l['valor'], 2, ',', '.');
       ?>
    </span>
    <div id="iconi">
      <div id="iconi-tamanho" class="fa fa-bed" aria-hidden="true">
        <span id="iconi-texto"><?= $l['numero_de_quartos'] ?></span>
      </div>
      <div id="iconi-tamanho" class="fa fa-bath"><span id="iconi-texto"><?= $l['numero_de_banheiros'] ?></span></div>
      <div id="iconi-tamanho" class="fa fa-car" aria-hidden="true"><span id="iconi-texto"><?= $l['garagem'] ?></span></div>
    </div>
  </div>
</div>
</div>
</div>

<?php endforeach ?>
 </div>
</div>

<!-- /.row -->

<!-- Features Section -->


