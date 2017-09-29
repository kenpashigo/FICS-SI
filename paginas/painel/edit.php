<?php

if(isset($_GET['edit'])){
  $edit = $_GET['edit'];
} else {
  $edit = 0;
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

  $data = explode('-', $_POST['data']);
  $dia = $data[2];
  $mes = $data[1];
  $ano = $data[0];


  $evento = $_POST['evento'];
  $evento = mysqli_real_escape_string($link, $evento);


  $query = "UPDATE si_eventos SET materia='$materia', dia='$dia', mes='$mes', ano='$ano', evento='$evento' WHERE id = '$edit'";

  //Inserção de dados no banco

  if(empty($materia)){
    echo '<div id="alert-container"><img src="../ico/warning.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p class="alert">Escolha uma materia</p></div>';
  }elseif(empty($evento)){
    echo '<div id="alert-container"><img src="../ico/warning.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p class="alert">Preencha o campo do evento</p></div>';
  }else {    
    if(mysqli_query($link, $query)){
      echo '<div id="alert-container"><img src="../ico/success.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p id="sucess">Evento atualizado</p></div>';
      unset($_POST);
    } else {
    echo '<div id="alert-container"><img src="../ico/error.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p class="erro">Algo deu errado</p></div>';
    }
  }
}

?>

<div id="posts-titulo">
  <p>Editar evento</p>
</div>
  <div id="recentes-posts-title">
    <div id="sql-id"><p>ID</p></div>
    <div id="sql-categoria"><p>MATERIA</p></div>
    <div id="sql-titulo"><p>DATA</p></div>
    <div id="sql-titulo"><p>EVENTO</p></div>        
    <?php if($edit > 0) { } else { echo '<div id="sql-editar"><p>EDIT</p></div>';
      echo '<div id="sql-excluir"><p>DEL</p></div>'; } ?>   
  </div>

<?php 
  $link = DBConnect();
  if($edit > 0 ) {
    $query = mysqli_query($link, "SELECT * FROM si_eventos WHERE id = '$edit'");  
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
  <?php if($edit < 1) {
    echo '<div id="sql-editar"><a href="?pagina=edit&edit='.$id.'"><img src="../ico/edit.png" alt="editar posts" /></a></div>';
    echo '<div id="sql-excluir"><a href="?pagina=del&del='.$id.'"><img src="../ico/garbage-2.png" alt="excluir posts" /></a></div>'; 
  } ?>
  
  

</div>

<?php }} ?>

<?php
  if($edit > 0) { include 'edit_content.php'; }

?>