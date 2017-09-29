  <div id="recentes-posts-title">
    <div id="sql-id"><p>ID</p></div>
    <div id="sql-categoria"><p>NOME</p></div>
    <div id="sql-titulo"><p>TITULO</p></div>
    <div id="sql-titulo"><p>MATERIA</p></div>        
    <div id="sql-data"><p>DATA</p></div>
    <div id="sql-hora"><p>HORA</p></div>
    <?php if($id == 0){echo '<div id="sql-editar"><p>VIEW</p></div>';} ?>   
  </div>

  <?php

  	if(isset($_GET['view'])){
  		$index = $_GET['view'];
  	} else {
  		$index = 0;
  	}

  	$link = DBConnect();

  	if($index == 0) {
  		$query = mysqli_query($link, "SELECT * FROM si_reclamacoes");
  	} else {
  		$query = mysqli_query($link, "SELECT * FROM si_reclamacoes WHERE id = '$index'");
  	}

  	$result = mysqli_num_rows($query);

  	if($result < 1) {
  		echo 'nada encontrado';
  	} else {
  		while($row = mysqli_fetch_assoc($query)){
  			$id = $row['id'];
  			$nome = $row['nome'];
  			$materia = $row['materia'];
  			$titulo = $row['titulo'];
  			$data = $row['data'];
  			$hora = $row['hora'];
  			$texto = $row['duvida']

  ?>

 	<div id="recentes-posts">

	  <div id="sql-id"><p><?php echo $id ?></p></div>
	  <div id="sql-categoria"><p><?php echo $nome ?></p></div>
	  <div id="sql-titulo"><p><?php echo $titulo ?> </p></div>
	  <div id="sql-titulo"><p><?php echo $materia ?> </p></div>	    
	  <div id="sql-data"><p><?php echo $data ?></p></div>
	  <div id="sql-hora"><p><?php echo $hora ?></p></div>
	  <?php if($index == 0){
	  	echo '<div id="sql-editar"><a href="?pagina=view&view='.$id.'"><img src="../ico/list.png" alt="editar posts" /></a></div>';} ?>   

	</div>

	<?php if(!empty($index)){ 
		echo '<div id="posts-titulo"><p>Reclamação</p></div>';
		echo '<div id="reclamacoes-posts"><p>'.$texto.'</p></div>';
	} else {

	} ?>
	
	

  <?php }} ?>




