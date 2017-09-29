<?php
  
  $pg = $_GET['posts'] ?? 1;

  $maximo = 3;
  $inicio = ($pg * $maximo) - $maximo;

  $obj = new Connection();

  $link = $obj->link();
  $query = "SELECT * FROM si_posts ORDER BY id DESC LIMIT $inicio, $maximo";
  $seleciona = $obj->query($query);
  $conta = mysqli_num_rows($seleciona);

  date_default_timezone_set('America/Sao_Paulo');
  $ddd = date("d")-1; if($ddd<10){$ddd='0'.$ddd;}    
  $mmm = date("m");      

  $query = "SELECT * FROM si_eventos WHERE mes = '$mmm' AND dia > '$ddd' ORDER BY mes ASC, dia ASC LIMIT 1";  
  $query = $obj->query($query);
  $result= mysqli_num_rows($query);

  if($result > 0) {
    while($result = mysqli_fetch_assoc($query)){
      $mes = $result['mes'];
      $evento = $result['evento'];      
      $dia = $result['dia'];
      $materia = $result['materia'];
    }    
  } else {    
    

    $query = "SELECT * FROM si_eventos WHERE mes > '$mmm' ORDER BY mes ASC, dia ASC LIMIT 1";
    $query = $obj->query($query);
    $result= mysqli_num_rows($query);

    while($result = mysqli_fetch_assoc($query)){
      $mes = $result['mes'];
      $evento = $result['evento'];      
      $dia = $result['dia'];
      $materia = $result['materia'];
    }
  }


  
?>

<div id="body-holder">
  <div id="body-content">
    <div id="aula-dia">
      <div id="aula">
        <p><span class="aula-title">Aula de hoje:</span></p>
        <p id="addia"></p>
      </div>

      <div id="event-recent">
        <p><span class="aula-title"><?=$materia?></span></p>
        <p><?=$evento?> <?=$dia?>/<?=$mes?></p>
      </div>
        
      </div>
    </div>
</div>

<div id="body-holder">
  <div id="body-content">
    <div id="titulo-h1">
      <p>Últimas postagens</p>
      <h1>Sistemas de informação - 3º Semestre</h1>
    </div>

  </div>
</div>
<?php

  if($conta <= 0) {
    echo '<span class="pagina-404">Nada encontrado!</span>';
  } else {
    while($row = mysqli_fetch_array($seleciona, MYSQLI_ASSOC)){
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

<nav id="nav">
  <ul class="pagination">
    <?php
      $seleciona = mysqli_query($link, "SELECT * FROM si_posts") or die(mysqli_error($link));
      $totalPosts = mysqli_num_rows($seleciona);

      $pags = ceil($totalPosts / $maximo);
      $links = 2;

      echo '<li><a href="?pagina=inicio&posts=1" aria-label="Página Inicial"><span aria-hidden="true">&laquo;</span></a></li>';

      for($i=$pg;$i <= $pg -1;$i++){
        if($i <= 0) {

        } else {
          echo '<li><a href="?pagina=inicio&posts='.$i.'">'.$i.'</a></li>';
        }
      }

      echo '<li><a href="?pagina=inicio&posts='.$pg.'">'.$pg.'</a></li>';

      for($i = $pg + 1;$i <= $pg + $links;$i++){
        if($i > $pags){

        } else {
          echo '<li><a href="?pagina=inicio&posts='.$i.'">'.$i.'</a></li>';
        }
      }

      echo '<li><a href="?pagina=inicio&posts='.$pags.'" aria-label="Última Página"><span aria-hidden="true">&raquo;</span></a></li>';

    ?>
  </ul>
</nav>
