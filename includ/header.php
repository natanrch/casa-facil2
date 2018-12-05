<!DOCTYPE html>
<html lang="pt-br">
 <meta charset="utf-8">
</head>
<title><?= $titulo ?></title>

 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="">
 <meta name="author" content="">
 <?= $cssExtra ?>
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet"> 

 <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Monoton|Noto+Serif|Playball|Roboto" rel="stylesheet">


 <link href="https://fonts.googleapis.com/css?family=Bilbo|Charmonman|Fjalla+One|Lobster+Two|Monoton|Monsieur+La+Doulaise|Noto+Serif|Roboto|Roboto+Slab|Shrikhand" rel="stylesheet">

 <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
 <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

 <link rel="stylesheet" type="text/css" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
 <!-- Custom styles for this template -->
 <link href="css/half-slider.css" rel="stylesheet">

 <link href="css/header.css" rel="stylesheet">
 <link href="css/resposivo.css" rel="stylesheet">
 <link href="css/slide.css" rel="stylesheet">
 <link href="css/footer.css" rel="stylesheet">


 <head>
 <body>
  <header>
<div class="container-fluid">
  <div class="row">
    
    
    <div id="header" class="col-lg-12 mb-12">
      <ul >
        <li><a id="local"  href="">Macapá-AP</a></li>
      </ul>
      <ul>
        

        <li><a id="duvidas" href="">Perguntas frequentes </a></li>
        <li><a id="quem-somos" href="quem-somos.php">Quem somos</a></li>
        <li><a id="contato" href="contato.php">Contato</a></li>
        
        <li><a href="#" id="whatsapp"> <i class="fab fa-whatsapp"></i></a>
          
        </li>
        <li><a href="#" id="facebook"><i class="fab fa-facebook-f"></i></a></li>
        <li>  <a href="#" id="instagram"><i class="fab fa-instagram"></i></a></li>
        <li id="login-usuario"><a href="cadastro-cliente-login.php"><span><img id="login-iconi" src="svg/person.svg" alt="icon chave">login</span></a></li>
      </ul>
      
    </div>

  </div>
</div>

<nav class="nav navbar navbar-expand-lg navbar-light " >
  <a id="logo" class="navbar-brand" href="index.php"><img id="logo" src="img/logotipo2.png" class="img-fluid" ></a>
  <button style="background: #fff" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div   class="collapse navbar-collapse" id="navbarSupportedContent" >
    <div id="home">
      <ul id="drop_menu"  class="navbar-nav " >
        <li class="nav-item active" >
          <a class="nav-link"  href="#"> <span  id="menu-pesquisa1">Lançamentos</span>  </a>
        </li>
        <li id="menu" class="nav-item dropdown">
          <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"  aria-expanded="false">
            <span id="menu-pesquisa3">Tipos</span> 
          </a>
          <ul  class="dropdown-menu" aria-labelledby="navbarDropdown" id="hover" >
            <li  > <a id="menu-sub"   class="dropdown-item" href="pesquisa.php?tipo=casa">casa</a></li>
            <li  > <a id="menu-sub"   class="dropdown-item" href="pesquisa.php?tipo=apartamento">Apartamento</a></li>
            <li> <a id="menu-sub"  class="dropdown-item" href="pesquisa.php?tipo=terreno">Terrenos</a></li>

            <li> <a id="menu-sub"  class="dropdown-item" href="#">Casas</a></li>
          </ul>
        </li>
        <li id="menu" class="nav-item dropdown">
          <a  class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"  aria-expanded="false">
            <span id="menu-pesquisa3">Bairros</span> 
          </a>
          <ul  class="dropdown-menu" aria-labelledby="navbarDropdown"  >
            <li  > <a id="menu-sub"   class="dropdown-item" href="pesquisa.php?tipo=buritizal ">burritizal</a></li>
            <li> <a id="menu-sub"  class="dropdown-item" href="beirol">beirol</a></li>

            <li> <a id="menu-sub"  class="dropdown-item" href="#">universidade</a></li>
          </ul>
        </li>
        
        

      </ul>
      <form action="pesquisa.php" class="search" method="get" id="pesquisa-unput">

        <input id="txtbusca" name="busca"  type="text" value="" placeholder="Digite o que você procura"/>

        <button id="btnBusca" name="enviar"><i class="fas fa-search"></i></button>



      </form>

    </div>

  </div>
</nav>
</header>