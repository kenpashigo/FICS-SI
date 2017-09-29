<?php	
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
	<title>SI - 3Sem</title>
	<link rel="icon" href="./ico/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="./style.css">
	<link rel="stylesheet" type="text/css" href="./css/responsive.css" media="screen and (max-width: 1024px)">
	<script type="text/javascript" src="./js/script.js"></script>
</head>
<body>

<div id="abso">
</div>





	<div id="darken" onclick="fecha();"></div>
	<div id="hidden-menu">
		<ul>
			<h2>Menu de navegação</h2>
			<li><a href="./index.php">HOME</a></li>
			<li><a href="./calendario.php">CALENDÁRIO</a></li>
			<li><a href="?pagina=materias">MATÉRIAS</a></li>
			<li><a href="?pagina=contato">CONTATO</a></li>			
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
				<li><a href="?pagina=materias">MATÉRIAS</a></li>
				<li><a href="?pagina=contato">CONTATO</a></li>				
			</ul>
		</div>
	</div>

<div id="dissolv">
</div>

	<!-- Corpo e Conteúdo  -->
<div id="body-holder">
  <div id="body-content">
			<?php
				if(isset($_GET['pagina'])){
					$do = ($_GET['pagina']);
				} else {
					$do = "inicio";
				}

				if(file_exists("paginas/".$do.".php")){
					include("paginas/".$do.".php");
				} else {
					print '<span class="pagina-404">Pagina não encontrada</span>';
				}
			?>
	</div>
</div>


	<!-- Rodapé  -->
	<div id="footer-holder">
		<div id="footer-content">
			<div id="links-uteis">

				<div class="coluna">
					<h4>Links úteis</h4>
					<li><a href="./index.php" target="_blank">Home</a></li>
					<li><a href="./calendario.php" target="_blank">Calendário</a></li>
					<li><a href="?pagina=materias" target="_blank">Materia</a></li>
					<li><a href="?pagina=contato" target="_blank">Contato</a></li>
					<li><a href="?pagina=publicar" target="_blank">Posts</a></li>
				</div>

				<div class="coluna">
					<h4>Redes Sociais</h4>
					<li><a href="#" target="_blank">Facebook</a></li>
					<li><a href="#" target="_blank">Twitter</a></li>
					<li><a href="#" target="_blank">Google Plus</a></li>
					<li><a href="#" target="_blank">Youtube</a></li>
					<li><a href="#" target="_blank">Reddit</a></li>
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
