<?php
require_once 'cria-cabecalho.php';
criaCabecalho('contato', array('css/contato.css'));
?>
<div class="container">
	<div class="row">
		<div class="col-lg-12 mb-12" id="contato-titulo">
			<h2 >ENTRE EM CONTATO</h2>
		</div>
	</div>
</div>
<article class="container">

	<div class="row">
		<div class="col-lg-7 mb-7" id="contato-coteiner" >		

			<form  method="" action="" id="contato-usuario" >
				<div class="form-group">
					<input type="text" name="nome" class="form-control" id="nome" placeholder="nome completo" >

				</div>
				<div class="form-group">

					<input type="email" class="form-control" id="email" placeholder="email">
				</div>
				<div class="form-group">

					<input type="text" class="form-control" name="assunto" id="assunto"  placeholder="Assunto" >

				</div>
				<div class="form-group">
					<input type="text" class="form-control" name="telefone" id="telefone" placeholder="telefone ">
				</div>

				<div class="form-group">

					<textarea id="input-publicar" placeholder="Mensagem" class="form-control" rows="4" name="descricao"></textarea>
				</div>
				<div>
					<button id="contato-entrar"  type="submit" class="btn  btn-lg" ">Enviar</button>
				</div>
			</form>
			

		</div>
		<div class="col-lg-4 mb-4" id="contatos-principais" >
			<div class="row">

				<a href="" id="red-social" class="col-lg-6 mb-6">

					<i  id="contato-redes-sociasi-facebook" class="fab fa-facebook-f"></i>
					
					<span id="texto-redes-sociasis">
						/casa-facil
					</span>

				</a>
				<a href="" id="red-social" class="col-lg-6 mb-6">
					<i  id="contato-redes-sociasi-instagram" class="fab fa-instagram"></i>
					<span id="texto-redes-sociasis">
						/casa-facil
					</span>
				</a>
			</div>
			<div class="row">

				<div id="contatos-pricipal-casa-facil" class="col-lg-12 mb-12">
					<h2>Preincipais contatos</h2>

					<ul >
						<li><img   src="svg/telefone.png" alt="icon chave">
							<a href="">(96)991082902</a>
						</li>
						<li><i id="contato-iconi"  class="fab fa-whatsapp"  ></i>
						<a href="">(96)991082902</a>
						</li>
						<li><img id="gmail" src="svg/gmail.png">
						<a href="">casa-facil@gmail.com</a></li>

					</ul>
					<h2>Horários de atendimentos</h2>
					<p>segunda a sexta:</p>
				</div>

			</div>
		</div>
	</div>


</article>