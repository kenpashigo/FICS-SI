<?php 
	require '../settings/settings.php';
	require '../settings/link.php';
	session_start();		
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Login</title>
	<link rel="icon" href="./ico/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="../css/login.css" />	
	<script type="text/javascript" src="../js/login.js"></script>	
</head>
<body>	

	<div id="full-image">
		<div id="login-holder">

			<div id="titulo">
				<p>Acessar conta</p>
			</div>

			<?php
				
				if(isset($_POST['enviar']) && $_POST['enviar'] == "send"){

				$link = DBConnect();

				if(!empty($_POST['login'])){					
					$login = $_POST['login'];					
						if(!empty($_POST['senha'])){
							$senha = Crypto($_POST['senha']);
								$seleciona = mysqli_query($link, "SELECT * FROM si_usuarios WHERE login = '$login'");
								$row = mysqli_num_rows($seleciona);

								if($row < 1) {
									echo '<p class="alert">Usuário não encontrado!</p>';
									session_unset();
								} else {
									while ($row = mysqli_fetch_assoc($seleciona)) {
										$userID = $row['id'];
										$senhaDB = $row['password'];
										
										if($senha == $senhaDB) {
											
											echo 'Conectado!';

											// Criando uma chave de sessão											
											$sessionKey = date("d/m/Y").date("H:i:s").$userID.$senhaDB;
											$sessionKey = Crypto($sessionKey);

											// Set sessions and user key
											$_SESSION['chave'] = $sessionKey;											
											$_SESSION['user'] = $userID;

											mysqli_query($link, "UPDATE si_usuarios SET sessao='$sessionKey' WHERE login='$login'");

											empty($_POST);
											header( "refresh:1;url=./pcontrole.php" ); 											

										} else {
											echo 'Senha incorreta!'; 
											empty($_POST);
											session_unset();
										}
									}								
								}
								
								} else { 
										echo "Digite uma senha"; 
										empty($_POST); 
										session_unset();
							 }} else { 
							 			echo "Digite seu login"; 
							 			empty($_POST); 
							 			session_unset();
								}				



				}
			?>

			<div id="form">
				<form action="" method="POST" enctype="multipart/form-data" class="form-class">

					<input type="text" name="login" placeholder="Seu login" class="inputs" />
					
					<input type="password" name="senha" placeholder="Senha" class="inputs" />

					<input type="submit" value="Confirmar" id="enviar"/>
	  			<input type="hidden" name="enviar" value="send" />

  			</form>
			</div>

		</div>
	</div>

</body>
</html>