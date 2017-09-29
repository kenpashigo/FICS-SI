<?php

if(isset($_GET['semestre'])){
    $semestre = $_GET['semestre'];
  } else {
    $semestre = 0;
  }

$link = DBConnect();

if(isset($_POST['enviar']) && $_POST['enviar'] == "send"){

  $materia = $_POST['materia'];
  $materia = mysqli_real_escape_string($link, $materia);

  $titulo = $_POST['titulo'];
  $titulo = mysqli_real_escape_string($link, $titulo);

  $uploaddir = './uploads/';

  $uploadfile = $uploaddir.basename($_FILES['imagem']['name']);

  if(move_uploaded_file($_FILES['imagem']['tmp_name'], '.'.$uploadfile)) {
    echo '<div id="alert-container"><img src="./ico/success.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p id="sucess">Upload da imagem com sucesso!</p></div>';
  } else {
    echo '<div id="alert-container"><img src="./ico/error.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p class="erro">Imagem não enviada!</p></div>';
    $uploadfile = null;
  }

  $uploaddirfile = './uploads/files/';

  $uploadfilefile = $uploaddirfile.basename($_FILES['file']['name']);

  if(move_uploaded_file($_FILES['file']['tmp_name'], '.'.$uploadfilefile)) {
    echo '<div id="alert-container"><img src="./ico/success.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p id="sucess">Upload do arquivo com sucesso!</p></div>';
  } else {
    echo '<div id="alert-container"><img src="./ico/error.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p class="erro">Arquivo não enviado!</p></div>';
    $uploadfilefile = null;
  }


  $descricao = $_POST['descricao'];
  $descricao = mysqli_real_escape_string($link, $descricao);

  $download = $_POST['download'];
  $download = mysqli_real_escape_string($link, $download);

  $postador = $_POST['postador'];
  $postador = mysqli_real_escape_string($link, $postador);

  date_default_timezone_set('America/Sao_Paulo');
  $data = date("d/m/Y");
  $hora = date("H:i:s");

  $query = "INSERT INTO si_posts (materia, titulo, imagem, arquivo, descricao, download, postador, data, hora) VALUES ('$materia', '$titulo', '$uploadfile', '$uploadfilefile', '$descricao', '$download', '$postador', '$data', '$hora')";

  //Inserção de dados no banco

  if(empty($materia)){
    echo '<div id="alert-container"><img src="./ico/warning.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p class="alert">Escolha uma materia</p></div>';
  }elseif(empty($titulo)){
    echo '<div id="alert-container"><img src="./ico/warning.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p class="alert">Insira um título da postagem</p></div>';
  }elseif(empty($postador)){
    echo '<div id="alert-container"><img src="./ico/warning.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p class="alert">Digite quem foi o autor da publicação</p></div>';
  }else {    
    if(mysqli_query($link, $query)){
      echo '<div id="alert-container"><img src="./ico/success.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p id="sucess">Publicação inserida com sucesso!</p></div>';
      unset($_POST);
    } else {
    echo '<div id="alert-container"><img src="./ico/error.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p class="erro">Algo deu errado</p></div>';
    }
  }
}
?>

<div id="posts-titulo"><p>Adicionar postagem</p></div>


<form action="" method="POST" enctype="multipart/form-data" class="form-class">

  <div id="texto-form"><p>Semestre</p></div>
    <select name="semestre" class="form-select" onchange="atribuir_opcoes(this.value);">
      <option value="">Escolha o semestre</option>
      <option value="1">1º Semestre</option>
      <option value="2">2º Semestre</option>
      <option value="3">3º Semestre</option>
      <option value="4">4º Semestre</option>
      <option value="5">5º Semestre</option>
      <option value="6">6º Semestre</option>
      <option value="7">7º Semestre</option>
      <option value="8">8º Semestre</option>            
    </select>

    <div id="texto-form"><p>Materia</p></div>
    <select name="materia" class="form-select" id="response-option">
      
    </select>

    <div id="texto-form"><p>Titulo</p></div>
    <input type="text" name="titulo" class="form-input" placeholder="Título" />

    <div id="texto-form"><p>Descrição do post</p></div>
    <textarea name="descricao" class="form-input" placeholder="Do que se trata esse post?"></textarea>

    <div id="texto-form"><p>Imagem do post</p></div>
    <input type="file" name="imagem" class="form-input" />

    <div id="texto-form"><p>Arquivo do post</p></div>
    <input type="file" name="file" class="form-input" />

    <div id="texto-form"><p>Link do arquivo</p></div>
    <input type="text" name="download" class="form-input" placeholder="Link do Download" />

    <div id="texto-form"><p>Autor da Postagem</p></div>
    <input type="text" name="postador" class="form-input" placeholder="Autor"/>

  <input type="submit" value="Confirmar" id="enviar"/>
  <input type="hidden" name="enviar" value="send" />

</form>
