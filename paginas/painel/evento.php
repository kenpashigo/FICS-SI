<?php

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


  $query = "INSERT INTO si_eventos (materia, dia, mes, ano, evento) VALUES ('$materia', '$dia', '$mes', '$ano', '$evento')";

  //Inserção de dados no banco

  if(empty($materia)){
    echo '<div id="alert-container"><img src="./ico/warning.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p class="alert">Escolha uma materia</p></div>';
  }elseif(empty($evento)){
    echo '<div id="alert-container"><img src="./ico/warning.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p class="alert">Preencha o campo do evento</p></div>';
  }else {    
    if(mysqli_query($link, $query)){
      echo '<div id="alert-container"><img src="./ico/success.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p id="sucess">Publicação inserida com sucesso!</p></div>';
      unset($_POST);
    } else {
    echo '<div id="alert-container"><img src="./ico/error.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p class="erro">Algo deu errado</p></div>';
    }
  }
}

?>

<div id="posts-titulo"><p>Adicionar evento</p></div>


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
      <option value="9">FERIADO</option>            
    </select>

    <div id="texto-form"><p>Materia</p></div>
    <select name="materia" class="form-select" id="response-option">
      
    </select>

    <div id="texto-form"><p>Quando irá acontecer</p></div>
    <input type="date" name="data" class="form-input" />

    <div id="texto-form"><p>Descrição do evento</p></div>
    <input type="text" name="evento" class="form-input" placeholder="Evento"/>

  <input type="submit" value="Confirmar" id="enviar"/>
  <input type="hidden" name="enviar" value="send" />

</form>