<div id='posts-titulo'><p>Something</p></div>
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
    <input type="text" name="titulo" class="form-input" placeholder="Título" value="<?=$titulo?>" />

    <div id="texto-form"><p>Descrição do post</p></div>
    <textarea name="descricao" class="form-input" placeholder="Do que se trata esse post?" ><?php echo $descricao ?></textarea>

    <div id="texto-form"><p>Imagem do post</p></div>
    <input type="file" name="imagem" class="form-input" />

    <div id="texto-form"><p>Arquivo do post</p></div>
    <input type="file" name="file" class="form-input" />

    <div id="texto-form"><p>Link do arquivo</p></div>
    <input type="text" name="download" class="form-input" placeholder="Link do Download" value="<?=$download?>" />

    <div id="texto-form"><p>Autor da Postagem</p></div>
    <input type="text" name="postador" class="form-input" placeholder="Autor" value="<?=$autor?>"/>

  <input type="submit" value="Confirmar" id="enviar"/>
  <input type="hidden" name="enviar" value="send" />

</form>