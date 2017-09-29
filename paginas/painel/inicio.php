<?php
  $link = DBConnect();
  $seleciona = mysqli_query($link, "SELECT * FROM si_posts") or die(mysqli_error($link));
  $posts = mysqli_num_rows($seleciona);

  $seleciona = mysqli_query($link, "SELECT * FROM si_reclamacoes") or die(mysqli_error($link));
  $pedidos = mysqli_num_rows($seleciona);

  $seleciona = mysqli_query($link, "SELECT * FROM si_usuarios") or die(mysqli_error($link));
  $usuarioQTDE = mysqli_num_rows($seleciona);

  $seleciona = mysqli_query($link, "SELECT * FROM si_eventos") or die(mysqli_error($link));
  $materiaQTDE = mysqli_num_rows($seleciona);

?>

<div id="resumo-holder">
  <div id="total-posts"><p>Posts</p></div>
  <div id="total-pedidos"><p>Contatos</p></div>
  <div id="total-acessos"><p>Usuários</p></div>
  <div id="total-eventos"><p>Eventos</p></div>
</div>

<div id="resumo-holder">
  <div id="total-posts"><p><?php echo $posts ?></p></div>
  <div id="total-pedidos"><p><?php echo $pedidos ?></p></div>
  <div id="total-acessos"><p><?php echo $usuarioQTDE ?></p></div>
  <div id="total-eventos"><p><?php echo $materiaQTDE ?></p></div>
</div>

<div id="posts-titulo">
  <p>10 últimos posts</p>
</div>
  <div id="recentes-posts-title">
    <div id="sql-id"><p>ID</p></div>
    <div id="sql-categoria"><p>MATERIA</p></div>
    <div id="sql-titulo"><p>TITULO</p></div>
    <div id="sql-imagem"><p>IMAGEM</p></div>
    <div id="sql-data"><p>DATA</p></div>
    <div id="sql-hora"><p>HORA</p></div>
    <div id="sql-editar"><p>EDIT</p></div>
    <div id="sql-excluir"><p>DEL</p></div>
  </div>


<?php

  $link = DBConnect();
  $seleciona = mysqli_query($link, "SELECT * FROM si_posts ORDER BY id DESC LIMIT 10") or die(mysqli_error($link));
  $conta = mysqli_num_rows($seleciona);

  if($conta <= 0) {
    echo '<span class="pagina-404">Nada encontrado!</span>';
  } else {
    while($row = mysqli_fetch_assoc($seleciona)){

      $id = $row['id'];
      $categoria = $row['materia'];
      $titulo = $row['titulo'];
      $imagem = $row['imagem'];
      $data = $row['data'];
      $hora = $row['hora'];
?>

<div id="recentes-posts">

  <div id="sql-id"><p><?php echo $id ?></p></div>
  <div id="sql-categoria"><p><?php echo $categoria ?></p></div>
  <div id="sql-titulo"><p><?php echo $titulo ?> </p></div>
  <div id="sql-imagem"><img src=".<?php echo $imagem ?>" /></div>
  <div id="sql-data"><p><?php echo $data ?></p></div>
  <div id="sql-hora"><p><?php echo $hora ?></p></div>
  <div id="sql-editar"><a href="?pagina=editar&editar=<?php echo $id ?>"><img src="../ico/edit.png" alt="editar posts" /></a></div>
  <div id="sql-excluir"><a href="?pagina=excluir&excluir=<?php echo $id ?>"><img src="../ico/garbage-2.png" alt="excluir posts" /></a></div>

</div>

<?php }} ?>

<div id="posts-titulo"><p>10 ultimas dúvidas registradas</p></div>
  <div id="recentes-posts-title">
    <div id="sql-id"><p>ID</p></div>
    <div id="sql-categoria"><p>NOME</p></div>
    <div id="sql-titulo"><p>MATERIA</p></div>
    <div id="sql-titulo"><p>TITULO</p></div>    
    <div id="sql-data"><p>DATA</p></div>
    <div id="sql-hora"><p>HORA</p></div>
    <div id="sql-editar"><p>VIEW</p></div>

  </div>

<?php

  $link = DBConnect();
  $seleciona = mysqli_query($link, "SELECT * FROM si_reclamacoes ORDER BY id DESC LIMIT 5") or die(mysqli_error($link));
  $conta = mysqli_num_rows($seleciona);

  if($conta <= 0) {
    echo '<span class="pagina-404">Nada encontrado!</span>';
  } else {
    while($row = mysqli_fetch_assoc($seleciona)){

      $id = $row['id'];
      $nome = $row['nome'];
      $materia = $row['materia'];
      $titulo = $row['titulo'];      
      $data = $row['data'];
      $hora = $row['hora'];
?>

<div id="recentes-posts">

  <div id="sql-id"><p><?php echo $id ?></p></div>
  <div id="sql-categoria"><p><?php echo $nome ?></p></div>
  <div id="sql-titulo"><p><?php echo $materia ?> </p></div>
  <div id="sql-titulo"><p><?php echo $titulo ?> </p></div>  
  <div id="sql-data"><p><?php echo $data ?></p></div>
  <div id="sql-hora"><p><?php echo $hora ?></p></div> 
  <div id="sql-editar"><a href="?pagina=view&view=<?php echo $id ?>"><img src="../ico/list.png" alt="editar posts" /></a></div>

</div>

<?php }} ?>


<div id="posts-titulo">
  <p>Últimos 5 eventos registrados</p>
</div>
  <div id="recentes-posts-title">
    <div id="sql-id"><p>ID</p></div>
    <div id="sql-categoria"><p>MATERIA</p></div>
    <div id="sql-titulo"><p>DATA</p></div>    
    <div id="sql-editar"><p>EDIT</p></div>
    <div id="sql-excluir"><p>DEL</p></div>
  </div>


<?php

  $link = DBConnect();
  $seleciona = mysqli_query($link, "SELECT * FROM si_eventos ORDER BY id DESC LIMIT 5") or die(mysqli_error($link));
  $conta = mysqli_num_rows($seleciona);

  if($conta <= 0) {
    echo '<span class="pagina-404">Nada encontrado!</span>';
  } else {
    while($row = mysqli_fetch_assoc($seleciona)){

      $id = $row['id'];
      $materia = $row['materia'];      
      $dia = $row['dia'];
      $mes = $row['mes'];
      $ano = $row['ano'];
      $data = $dia.'/'.$mes.'/'.$ano;
?>

<div id="recentes-posts">

  <div id="sql-id"><p><?php echo $id ?></p></div>
  <div id="sql-categoria"><p><?php echo $materia ?></p></div>
  <div id="sql-titulo"><p><?php echo $data ?> </p></div>  
  <div id="sql-editar"><a href="?pagina=edit&edit=<?php echo $id ?>"><img src="../ico/edit.png" alt="editar posts" /></a></div>
  <div id="sql-excluir"><a href="?pagina=del&del=<?php echo $id ?>"><img src="../ico/garbage-2.png" alt="excluir posts" /></a></div>

</div>

<?php }} ?>
