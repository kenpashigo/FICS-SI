<?php
  $semestre = $_GET['semestre'] ?? 0; 
?>

<div id="body-holder">
  <div id="body-content">
    <div id="titulo-h1">
      <p>Conte sua opinião</p>
      <h1>Cadastro de dúvidas</h1>
    </div>

  </div>
</div>

<div id="body-holder">
  <div id="body-content">
    <div id="formulario">
      <?php

      $obj = new Connection();
      $link = $obj->link();

        if(isset($_POST['enviar']) && $_POST['enviar'] == "send"){

          $nome = $_POST['nome'];
          $nome = mysqli_real_escape_string($link, $nome);

          $materia = $_POST['materia'];
          $materia = mysqli_real_escape_string($link, $materia);

          $titulo = $_POST['titulo'];
          $titulo = mysqli_real_escape_string($link, $titulo);

          $duvida = $_POST['duvida'];
          $duvida = mysqli_real_escape_string($link, $duvida);

          date_default_timezone_set('America/Sao_Paulo');
          $data = date("d/m/Y");
          $hora = date("H:i:s");

          $query = "INSERT INTO si_reclamacoes (nome, materia, titulo, duvida, data, hora) VALUES ('$nome', '$materia', '$titulo', '$duvida', '$data', '$hora')";

          //Inserção de dados no banco

          if(empty($nome)){
            echo '<div id="alert-container"><img src="./ico/warning.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p class="alert">Digite seu nome</p></div>';
          }elseif(empty($materia)){
            echo '<div id="alert-container"><img src="./ico/warning.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p class="alert">Escolha uma matéria</p></div>';
          }elseif(empty($titulo)){
            echo '<div id="alert-container"><img src="./ico/warning.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p class="alert">Digite um titulo</p></div>';
          }elseif(empty($duvida)){
            echo '<div id="alert-container"><img src="./ico/warning.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p class="alert">Nos explique sua dúvida em até 500 caracteres</p></div>';
          }else {
            if($obj->query($query)){
              echo '<div id="alert-container"><img src="./ico/success.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p id="sucess">Publicação inserida com sucesso!</p></div>';
              unset($_POST);
            } else {
              echo '<div id="alert-container"><img src="./ico/error.png" alt="hora-do-post" width="45px" height="45px" height="auto" style="margin-right: 15px" /><p class="erro">Algo deu errado</p></div>';
            }
          }



        }
      ?>
        <form action="" method="POST" enctype="multipart/form-data" class="form-class">

          <div id="texto-form"><p>Nome</p></div>
          <input type="text" name="nome" class="form-input" placeholder="Autor"/>

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
          <input type="text" name="titulo" class="form-input" placeholder="Título" />

          <div id="texto-form"><p>Sua dúvida</p></div>
          <textarea name="duvida" class="form-input" style="min-height: 120px" placeholder="Conte em até 500 caracteres qual é o seu problema e estaremos arquivando para resolver ao final do mês"></textarea>

          <input type="submit" value="Publicar" id="enviar"/>
          <input type="hidden" name="enviar" value="send" />

        </form>

    </div>
  </div>
</div>
