<?php
  if(isset($_GET['semestre'])){
    $semestre = $_GET['semestre'];
  } else {
    $semestre = 0;
  }
?>

<div id="body-holder">
  <div id="body-content">

    <div id="titulo-h1">
      <p>Categoria</p>
      <h1>Materias</h1>
    </div>
  </div>
</div>

<div id="body-holder">
  <div id="body-content">
    <div id="formulario">
      
      <div id="texto-form"><p>Semestre</p></div>
        <select name="semestre" class="form-select" onchange="atribuir_opcoes_busca_materia(this.value);">
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
    </div>
  </div>
</div>

  <div id="body-holder">
    <div id="body-content">
      <div id="formulario">

        <div id="texto-form"><p>Materia</p></div>
          <select name="materia" class="form-select" id="response-option" onchange="window.location.href=this.value">
            
          </select>
      </div>
    </div>
  </div>
