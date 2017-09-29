

<?php
  $materiaVar = explode(".", $_GET['materia']);

  $obj = new Connection();
  $link = $obj->link();

  $query = "SELECT * FROM si_posts WHERE materia = '$materiaVar[0]' ORDER BY id DESC";
  $seleciona = $obj->query($query);
  $conta = mysqli_num_rows($seleciona);
?>
<div id="body-holder">
  <div id="body-content">
    <div id="titulo-h1">
      <p>Materia</p>
      <h1><?php echo $materiaVar[0] ?></h1>
    </div>

  </div>
</div>
<?php

  if($conta <= 0) {
    echo '<span class="pagina-404">A matéria '.$materiaVar[0].' ainda não contém nenhum post.</span>';
    echo '<div id="body-holder"><div id="body-content"><a href="?pagina=materias"><input type="submit" value="Voltar" id="enviar"/></a></div></div>';
    echo '<div id="full-width"></div>';
  } else {
    while ($row = mysqli_fetch_assoc($seleciona)){
      $id = $row['id'];
      $materia = $row['materia'];
      $titulo = $row['titulo'];
      $imagem = $row['imagem'];
      $arquivo = $row['arquivo'];
      $descricao = $row['descricao'];
      $imagem = $row['imagem'];
      $data = $row['data'];
      $hora = $row['hora'];
      $postador = $row['postador'];
      $download = $row['download'];
?>



<div id="body-holder">
  <div id="body-content">
    <div id="frame-news">

      <div id="materia">
        <h3><a href="?pagina=MateriaPost&materia=<?php echo $materia ?>.php"><?php echo $materia ?></a></h3>
      </div>

      <?php if(empty($imagem)){}else{echo '<div id="imagem"><img src="'.$imagem.'" /></div>';}?>

      <div id="titulo">
        <p><?php echo $titulo ?></p>
      </div>      

      <?php if(empty($descricao)){}else{echo '<div id="conteudo"><p>'.$descricao.'</p></div>';}?>

      <div id="links">
        <div id="data-e-hora">          

          <div id="data">
            <p><span class="post-stamp"><?=$postador?> </span><span class="time-stamp">à <?php echo horas($data, $hora); ?></span></p>
          </div>          

        </div>

        <?php if(!empty($download) || !empty($arquivo)) {include './paginas/baixar.php';} ?>

      </div>      
    </div>
  </div>
</div>


<?php }}?>
