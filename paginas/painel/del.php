<?php

if(isset($_GET['del'])){
  $del = $_GET['del'];
} else {
  $del = 0;
}

if(isset($_GET['semestre'])){
    $semestre = $_GET['semestre'];
  } else {
    $semestre = 0;
}

  $link = DBConnect();

  if(isset($_POST['enviar']) && $_POST['enviar'] == "send"){

    $query = "DELETE FROM si_eventos WHERE id = '$del'";

    if(mysqli_query($link, $query)){
      echo '<div id="alert-container"><img src="../ico/success.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p id="sucess">Publicação excluida com sucesso!</p></div>';
      header( "refresh:2;url=./pcontrole.php" );
    } else {
    echo '<div id="alert-container"><img src="../ico/error.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p class="erro">Algo deu errado</p></div>';
    }

  }

?>

<div id="posts-titulo">
  <p>Deletar EVENTO</p>
</div>
  <div id="recentes-posts-title">
    <div id="sql-id"><p>ID</p></div>
    <div id="sql-categoria"><p>MATERIA</p></div>
    <div id="sql-titulo"><p>DATA</p></div>
    <div id="sql-titulo"><p>EVENTO</p></div>        
    <?php if($del > 0) { } else { echo '<div id="sql-editar"><p>EDIT</p></div>';
      echo '<div id="sql-excluir"><p>DEL</p></div>'; } ?>   
  </div>

<?php 
  $link = DBConnect();
  if($del > 0 ) {
    $query = mysqli_query($link, "SELECT * FROM si_eventos WHERE id = '$del'");  
  } else {
    $query = mysqli_query($link, "SELECT * FROM si_eventos");
  }
  
  $row = mysqli_num_rows($query);

  if($row > 0) {
    while($row = mysqli_fetch_assoc($query)){
      $id = $row['id'];
      $materia = $row['materia'];
      $dia = $row['dia'];
      $mes = $row['mes'];
      $ano = $row['ano'];
      $data = $ano.'-'.$mes.'-'.$dia;      
      $evento = $row['evento'];        
?>

<div id="recentes-posts">

  <div id="sql-id"><p><?php echo $id ?></p></div>
  <div id="sql-categoria"><p><?php echo $materia ?></p></div>
  <div id="sql-titulo"><p><?php echo $data ?> </p></div>
  <div id="sql-titulo"><p><?php echo $evento ?> </p></div>
  <?php if($del < 1) {
    echo '<div id="sql-editar"><a href="?pagina=edit&edit='.$id.'"><img src="../ico/edit.png" alt="editar posts" /></a></div>';
    echo '<div id="sql-excluir"><a href="?pagina=del&del='.$id.'"><img src="../ico/garbage-2.png" alt="excluir posts" /></a></div>'; 
  } ?>
  
  

</div>

<?php }} ?>

<?php
  if($del == 0) {

  } else {
    echo '<div id="posts-titulo"><p>Deletar</p></div>';
    echo '<div id="delete"><p>Deseja deletar esse post?</p><form action="" method="POST" enctype="multipart/form-data"><input type="submit" value="Sim" id="enviar"/><input type="hidden" name="enviar" value="send" /></form><a href="./pcontrole.php"><button id="enviar">Não</button></a></div>';

  }

?>