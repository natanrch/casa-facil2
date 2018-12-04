<?php

    require_once 'cria-cabecalho.php';
    criaCabecalho('login-criarconta', array('css/login-criarconta.css'));
 ?>


<div   class="container-fluid">
   <div class="row">
       <div id="informacao-usuario" class="col-lg-12 mb-12 mt-4">
           <h1 >Faça seu login ou crie uma conta gratuita </h1>
           <p >Veja todos os seus anúncios em um só lugar. Alugue seus<br> imóveis de forma rápida e fácil, altere seu perfil com segurança</p>
      </div>
 </div>
</div>
<div   class="container-fluid" >
   <div class="row">
      
      
      <div id="conteiner-login"  class="col-lg-4 mb-4 ">
         <div class="row">
             <div id="login"  class="col-lg-12 mb-12">
                 <h3> <img id="login-iconi" src="svg/person.svg" alt="icon chave"> Login anumciante</h3>
            </div>
       </div>
       <form method="post" id="form_login" action="logar.php">
          <div class="col-sm-12">
             <label>Email</label>
             <input type="email" class="form-control" name="user_email" id="user_email" >
        </div>
        <div class="col-sm-12">
             <label>Senha</label>
             <input type="password" class="form-control" id="user_password" name="user_password">
             <p><a href="#">Esqueci minha senha </a></p>
        </div>
        <div class="form-group adicionar">
             
             <button id="entrar"  type="submit" class="btn  btn-lg" ">Entrar</button>
        </div>
   </form>
</div>
<div id="conteiner-cadastre-se"  class="col-lg-7 mb-7">
  <div class="row">
     <div id="cadastre-se"  class="col-lg-12 mb-12">
         <h3><img id="conteiner-cadastre-se-iconi" src="svg/home.svg" alt="icon chave">Ainda não tenho uma conta </h3>
    </div>
</div>
<form method="post" id="form_cad" action="adiciona-usuario.php">
                        <div class="col-sm-12">
                            <label>Nome completo</label>
                            <input type="text" class="form-control" id="nome_cad" name="nome_cad">
                        </div>
                        <div class="col-sm-12">
                            <label>E-mail</label>
                            <input type="email" class="form-control" name="email_cad" id="email_cad">
                        </div>
                        <div class="col-sm-12">
                            <label>Senha</label>
                           <input type="password" class="form-control" id="senha_cad" name="senha_cad" >
                        </div>
                        <div class="col-sm-12">
                            <label>Repetir senha</label>
                            <input type="password" class="form-control" id="repetirsenha_cad" name="repetirsenha_cad">
                        </div>
                        <div class="form-group adicionar mt-4">
                            <!-- <button type="submit" class="btn btn-lg" id="entrar">  Criar conta </button> -->
                            <button id="entrar"  type="submit" class="btn  btn-lg" ">Criar conta</button>
                        </div>
                   </form>
</div>
</div>
</div>

<footer>

   <?php include_once'includ/footer.php'; ?>
</footer>


