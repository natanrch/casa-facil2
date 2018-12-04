					<div class="card mr-3" >
						<div class="Apartamento ">
							<!--<span class="casa11" >Apartamentos</span>-->
							<span class="casa"><?= $l['tipo'] ?></span>
						</div>
						<figcaption>
						<a  href="informacao-imovel.php?id=<?= $l['id'] ?>"><img  src="img/<?= $l['imagem'] ?>" class="img_hover card__img"></a>
                         </figcaption>
						<p class="idapartamentos"><?= $l['titulo'] ?><br>
							<span  class="idapartamentos1">Macapá-ap</span>
						</p>
						<div class="preco col-12 card-body1 ">R$ <?= $l['valor'] ?>
							<!--<span class="float-xl-right icnis" >
								&nbsp;&nbsp;&nbsp;<img src="glyph-iconset-master/svg/si-glyph-key.svg" alt="icon chave" class="" width="25px" style="opacity: 2" >&nbsp; <?= $l['numero_de_quartos'] ?>
								<img src="glyph-iconset-master/svg/si-glyph-bank.svg" alt="icon chave" class="" width="25px" style="opacity: 1" >&nbsp;<?= $l['garagem'] ?>
								<img src="glyph-iconset-master/svg/si-glyph-shower.svg" alt="icon chave" class="" width="25px" style="opacity: 2" >&nbsp;<?= $l['numero_de_banheiros'] ?>
							</span>-->
						</div>
					</div>