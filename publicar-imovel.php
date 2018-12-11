<?php
    require_once 'cria-cabecalho.php';

   criaCabecalho('publicar-imovel', array('css/publicar-imovel.css'));
   
 ?>

<article >
	
	<div class="container">
    <div class="row">
      

      <div  class="col-lg-12 mb-12" id="pulicar-titulo" >
		<h1>Cadastre seu imóvel</h1>
  </div>
</div>
		<div class="row">
      

      <div  id="pagprincipal" class="col-lg-8 mb-8 ">
        <div class="row">
         <div   class="col-lg-12 mb-12" id="informacao">
           <h3 >Informações do Imóvel</h3>
         </div>
       </div>
       <div class="row">


         <div  class="col-lg-12 mb-12">
          <form  role="form" enctype="multipart/form-data" method="post" action="adiciona-imovel.php">
            <div class="row">
             
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="form-group">
                  <label>Título</label>
                  <input id="input-publicar" class="form-control" type="text" name="titulo">
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="form-group">
                  <label>Tipo</label>
                  <select id="input-publicar" class="form-control" name="tipo">
                    <option value="casa">Casa</option>
                    <option value="apartamento">Apartamento</option>
                    <option value="terreno">Terreno</option>
                  </select>
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                <div class="form-group">
                  <label>Preço</label>
                  <div class="input-group">
                    <div class="input-group-addon">R$</div>
                    <input id="input-publicar" class="form-control" type="number" name="valor">
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Descrição</label>
              <textarea id="input-publicar" class="form-control" rows="4" name="descricao"></textarea>
            </div>
            <div class="form-group">
              <label>Endereço</label>
              <input class="form-control" id="input-publicar" placeholder="Entre com a localização" autocomplete="off" type="text" name="endereco">
              <p class="help-block">Você pode adicionar a localização</p>
            </div>
            <div class="form-group">
              <label>Bairro</label>
              <input class="form-control" type="text" id="input-publicar" name="bairro">
            </div>
            <div class="row" >
              <div class="col-sm-12 col-lg-3">
                <div class="form-group">
                  <label>Quartos</label>
                  <input class="form-control" type="number" id="input-publicar" name="quartos">
                </div>
              </div>
              <div class="col-sm-12 col-lg-3">
                <div class="form-group">
                  <label>Banheiros</label>
                  <input class="form-control" id="input-publicar" type="number" name="banheiros">
                </div>
              </div>
              <div class="col-sm-12 col-lg-3">
                <div class="form-group">
                  <label>Garagem</label>
                  <input class="form-control" id="input-publicar" type="number" name="garagem">
                </div>
              </div>
              <div class="col-sm-12 col-lg-3">
                <div class="form-group">
                  <label>Área</label>
                  <div class="input-group">
                    <input class="form-control" type="number" id="input-publicar" step="0.01" name="area">
                    <div class="input-group-addon">M<sup>2</sup></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-lg-3">
                <div class="btn-group">
                  <input type="radio" name="alugar_ou_vender" value="alugar" class="form-control" />
                  <label>Alugar</label>
                  <input type="radio" name="alugar_ou_vender" value="vender" class="form-control" /> 
                  <label>Vender</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-lg-12">
                <div class="form-group">
                  <label>Imagem da galeria</label>
                  <div class="file-input file-input-new">
                    <input type="hidden">
                    <div class="file-preview ">
                      <div class="file-preview-status text-center text-success"></div>
                      <div class="file-preview-thumbnails"></div>
                    </div>
                    <div class="btn btn-o btn-default btn-file"> <i class="glyphicon glyphicon-folder-open"></i>Adicionar Imagens <input class="file" multiple="" data-show-upload="false" data-show-caption="false" data-show-remove="false" accept="image/jpeg,image/png" data-browse-class="btn btn-o btn-default" data-browse-label="Browse Images" id="1520140310030" type="file" name="imagem"></div>
                  </div>
                </div>
              </div>
            </div>
           
            <div class="form-group " id="adicionar">
              <!-- <input type="submit" name="enviar" class="btn btn-primary"> -->
              <button id="enviar"  name="enviar" type="submit" class="btn  btn-lg" ">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</article>
<footer>
	<?php include_once'includ/footer.php'; ?>
</footer>

