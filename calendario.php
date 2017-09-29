<?php
	require './settings/settings.php';
	require './settings/link.php';
	session_start();
	session_unset();	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Calendário</title>
	<link rel="icon" href="./ico/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="./style.css">
	<link rel="stylesheet" type="text/css" href="./css/calendario.css">
	<link rel="stylesheet" type="text/css" href="./css/responsive.css" media="screen and (max-width: 1024px)">
	<script type="text/javascript" src="./js/script.js"></script>
	<script type="text/javascript" src="./js/calendario.js"></script>

</head>
<body>

<div id="abso">
</div>

	<div id="darken" onclick="fecha();"></div>
	<div id="hidden-menu">
		<ul>
			<h2>Menu de navegação</h2>
			<li><a href="./index.php">HOME</a></li>
			<li><a href="./calendario.php.php">CALENDÁRIO</a></li>
			<li><a href="./index.php?pagina=materias">MATÉRIAS</a></li>
			<li><a href="./index.php?pagina=contato">CONTATO</a></li>			
		</ul>
	</div>


	<!-- Topo e navegação  -->
	<div id="top-holder">
		<div id="title-holder">
			<div id="logo">
				<a href="./index.php"><img src="./imgsource/logo.png"></a>
			</div>
			<div id="titulo-nome">
				<h1>SI - 3º SEMESTRE</h1>
			</div>
			<div id="hamburger">
				<img src="./imgsource/menu_hidden.png" alt="menu" type="button" onclick="hidden_menu(1);" />
			</div>
		</div>
		<div id="menu-holder">
			<ul>
				<li><a href="./index.php">HOME</a></li>
				<li><a href="./calendario.php">CALENDÁRIO</a></li>
				<li><a href="./index.php?pagina=materias">MATÉRIAS</a></li>
				<li><a href="./index.php?pagina=contato">CONTATO</a></li>				
			</ul>
		</div>
	</div>

<div id="dissolv">
</div>

	<!-- Corpo e Conteúdo  -->
<div id="body-holder">
  <div id="body-content">			
			<div id="calendario-holder">
				
				<div id="nav-holder">

					<div id="nav-title">
						<h2 id="cldr"></h2>
					</div>

					<div id="nav">
						<span class="left" onclick="changeMonth(-1)"><</span>
						<span class="righ" onclick="changeMonth(1)">></span>
					</div>

				</div>
				

				

				<div id="week">					
					<div class="day"><p>D</p></div>
					<div class="day"><p>S</p></div>
					<div class="day"><p>T</p></div>
					<div class="day"><p>Q</p></div>
					<div class="day"><p>Q</p></div>
					<div class="day"><p>S</p></div>
					<div class="day"><p>S</p></div>
				</div>

				<div id="week">					
					<div class="day"><p class="index" data-index="0"></p></div>
					<div class="day"><p class="index" data-index="1"></p></div>
					<div class="day"><p class="index" data-index="2"></p></div>
					<div class="day"><p class="index" data-index="3"></p></div>
					<div class="day"><p class="index" data-index="4"></p></div>
					<div class="day"><p class="index" data-index="5"></p></div>
					<div class="day"><p class="index" data-index="6"></p></div>								
					<div class="day"><p class="index" data-index="0"></p></div>
					<div class="day"><p class="index" data-index="1"></p></div>
					<div class="day"><p class="index" data-index="2"></p></div>
					<div class="day"><p class="index" data-index="3"></p></div>
					<div class="day"><p class="index" data-index="4"></p></div>
					<div class="day"><p class="index" data-index="5"></p></div>
					<div class="day"><p class="index" data-index="6"></p></div>								
					<div class="day"><p class="index" data-index="0"></p></div>
					<div class="day"><p class="index" data-index="1"></p></div>
					<div class="day"><p class="index" data-index="2"></p></div>
					<div class="day"><p class="index" data-index="3"></p></div>
					<div class="day"><p class="index" data-index="4"></p></div>
					<div class="day"><p class="index" data-index="5"></p></div>
					<div class="day"><p class="index" data-index="6"></p></div>						
					<div class="day"><p class="index" data-index="0"></p></div>
					<div class="day"><p class="index" data-index="1"></p></div>
					<div class="day"><p class="index" data-index="2"></p></div>
					<div class="day"><p class="index" data-index="3"></p></div>
					<div class="day"><p class="index" data-index="4"></p></div>
					<div class="day"><p class="index" data-index="5"></p></div>
					<div class="day"><p class="index" data-index="6"></p></div>									
					<div class="day"><p class="index" data-index="0"></p></div>
					<div class="day"><p class="index" data-index="1"></p></div>
					<div class="day"><p class="index" data-index="2"></p></div>
					<div class="day"><p class="index" data-index="3"></p></div>
					<div class="day"><p class="index" data-index="4"></p></div>
					<div class="day"><p class="index" data-index="5"></p></div>
					<div class="day"><p class="index" data-index="6"></p></div>
					<div class="day"><p class="index" data-index="0"></p></div>
					<div class="day"><p class="index" data-index="1"></p></div>
					<div class="day"><p class="index" data-index="2"></p></div>
					<div class="day"><p class="index" data-index="3"></p></div>
					<div class="day"><p class="index" data-index="4"></p></div>
					<div class="day"><p class="index" data-index="5"></p></div>
					<div class="day"><p class="index" data-index="6"></p></div>
				</div>

			</div>
	</div>
</div>

<div id="body-holder">
	<div id="body-content">
		<div id="eventos">

			<div id="eventos-titulo"><h2>Próximos eventos</h2></div>

			<div class="eventos-data">
				<div id="dia"><p>DIA</p></div>
				<div id="dia"><p>MES</p></div>
				<div id="mater"><p>MATERIA</p></div>
				<div id="descricao"><p>EVENTO</p></div>
			</div>

			<div id="response">
			</div>

		</div>
	</div>
</div>

	<!-- Rodapé  -->
	<div id="footer-holder">
		<div id="footer-content">
			<div id="links-uteis">

				<div class="coluna">
					<h4>Links úteis</h4>
					<li><a href="./index.php" >Home</a></li>
					<li><a href="./calendario.php" >Calendário</a></li>
					<li><a href="./index.php?pagina=materias" >Materia</a></li>
					<li><a href="./index.php?pagina=contato" >Contato</a></li>
					<li><a href="./index.php?pagina=publicar" >Posts</a></li>
				</div>




				<div class="coluna">
					<h4>Redes Sociais</h4>
					<li><a href="#" >Facebook</a></li>
					<li><a href="#" >Twitter</a></li>
					<li><a href="#" >Google Plus</a></li>
					<li><a href="#" >Youtube</a></li>
					<li><a href="#" >Reddit</a></li>
				</div>

			</div>

			<div id="low">
				<div id="register">
					<p>© 2016-2016 EnDivs Design | Kenpashi & Sufuria | <a href="./paginas/login.php"><span class="destaque">Versão 0.1 Λ</span></a>
					<br>Todas as imagens de livros, noticias e etc são marcas registradas dos seus respectivos proprietários.</p>
				</div>

				<div id="desenvolvedor">
					<p>Desenvolvido por:</p>
					<img src="./imgsource/desenveloper.png">
				</div>
			</div>

		</div>
	</div>



</body>
</html>
