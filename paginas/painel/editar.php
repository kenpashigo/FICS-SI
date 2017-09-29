<?php

if(isset($_GET['editar'])){
  $editar = $_GET['editar'];
}else{
  $editar = 0;
}

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
    echo '<div id="alert-container"><img src="../ico/success.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p id="sucess">Upload da imagem com sucesso!</p></div>';
  } else {
    echo '<div id="alert-container"><img src="../ico/error.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p class="erro">Imagem não enviada!</p></div>';

    $seleciona = mysqli_query($link, "SELECT * FROM si_posts WHERE id = $editar") or die(mysqli_error($link));
      $conta = mysqli_num_rows($seleciona);

      if($conta <= 0) {
      } else {
        while($row = mysqli_fetch_assoc($seleciona)){
          $imagem = $row['imagem'];
        }
      } $uploadfile = $imagem;
    }
  

  $uploaddirfile = './uploads/files/';

  $uploadfilefile = $uploaddirfile.basename($_FILES['file']['name']);

  if(move_uploaded_file($_FILES['file']['tmp_name'], '.'.$uploadfilefile)) {
    echo '<div id="alert-container"><img src="../ico/success.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p id="sucess">Upload do arquivo com sucesso!</p></div>';
  } else {
    echo '<div id="alert-container"><img src="../ico/error.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p class="erro">Arquivo não enviado!</p></div>';
    $seleciona = mysqli_query($link, "SELECT * FROM si_posts WHERE id = $editar") or die(mysqli_error($link));
      $conta = mysqli_num_rows($seleciona);

      if($conta <= 0) {
      } else {
        while($row = mysqli_fetch_assoc($seleciona)){
          $arquivo = $row['arquivo'];
        }
      } $uploadfilefile = $arquivo;
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

  $query = "UPDATE si_posts SET materia='$materia', titulo='$titulo', imagem='$uploadfile', arquivo='$uploadfilefile', descricao='$descricao', download='$download', postador='$postador', data='$data', hora='$hora' WHERE id = '$editar'";

  //Inserção de dados no banco

  if(empty($materia)){
    echo '<div id="alert-container"><img src="../ico/warning.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p class="alert">Escolha uma materia</p></div>';
  }elseif(empty($titulo)){
    echo '<div id="alert-container"><img src="../ico/warning.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p class="alert">Insira um título da postagem</p></div>';
  }elseif(empty($postador)){
    echo '<div id="alert-container"><img src="../ico/warning.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p class="alert">Digite quem foi o autor da publicação</p></div>';
  }else {    
    if(mysqli_query($link, $query)){
      echo '<div id="alert-container"><img src="../ico/success.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p id="sucess">Publicação inserida com sucesso!</p></div>';
      unset($_POST);
    } else {
    echo '<div id="alert-container"><img src="../ico/error.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p class="erro">Algo deu errado</p></div>';
    }
  }
}
?>

<div id="posts-titulo">
  <p>Editar post</p>
</div>
  <div id="recentes-posts-title">
    <div id="sql-id"><p>ID</p></div>
    <div id="sql-categoria"><p>MATERIA</p></div>
    <div id="sql-titulo"><p>TITULO</p></div>
    <div id="sql-imagem"><p>IMAGEM</p></div>
    <div id="sql-data"><p>DATA</p></div>
    <div id="sql-hora"><p>HORA</p></div>
    <?php
      if($editar == 0) {
        echo '<div id="sql-editar">Edit</div>';
        echo '<div id="sql-excluir">Del</div>';
      }
    ?>

  </div>


<?php



  $link = DBConnect();
  if($editar == 0 ){
    $seleciona = mysqli_query($link, "SELECT * FROM si_posts ORDER BY id DESC") or die(mysqli_error($link));
  } else {
    $seleciona = mysqli_query($link, "SELECT * FROM si_posts WHERE id = $editar") or die(mysqli_error($link));
  }

  $conta = mysqli_num_rows($seleciona);

  if($conta <= 0) {
    echo '<span class="pagina-404">Nada encontrado!</span>';
  } else {
    while($row = mysqli_fetch_assoc($seleciona)){

      $id = $row['id'];
      $materia = $row['materia'];
      $titulo = $row['titulo'];
      $descricao = $row['descricao'];      
      $imagem = $row['imagem'];
      $download = $row['download'];
      $autor = $row['postador'];
      $data = $row['data'];
      $hora = $row['hora'];
?>

<div id="recentes-posts">

  <div id="sql-id"><p><?php echo $id ?></p></div>
  <div id="sql-categoria"><p><?php echo $materia ?></p></div>
  <div id="sql-titulo"><p><?php echo $titulo ?> </p></div>
  <div id="sql-imagem"><img src=".<?php echo $imagem ?>" /></div>
  <div id="sql-data"><p><?php echo $data ?></p></div>
  <div id="sql-hora"><p><?php echo $hora ?></p></div>
  <?php if($editar == 0) {
    echo '<div id="sql-editar"><a href="?pagina=editar&editar='.$id.'"><img src="../ico/edit.png" alt="editar posts" /></a></div>';
    echo '<div id="sql-excluir"><a href="?pagina=excluir&excluir='.$id.'"><img src="../ico/garbage-2.png" alt="excluir posts" /></a></div>';
  } ?>



</div>

<?php }} ?>

<?php 
  
  if($editar == 0) {
    
  } else {
    include './painel/form.php';
  }
  
?>
    
