<div id="posts-titulo"><p>Atualize os campos que você deseja editar</p></div>


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

    <div id="texto-form"><p>Quando irá acontecer</p></div>
    <input type="date" name="data" class="form-input" value="<?=$data?>" />

    <div id="texto-form"><p>Descrição do evento</p></div>
    <input type="text" name="evento" class="form-input" placeholder="Evento" value="<?=$evento?>" 
    />

  <input type="submit" value="Confirmar" id="enviar"/>
  <input type="hidden" name="enviar" value="send" />

</form>