<?php

/*function valida(){

    $nome = $_POST['----'];
    $email = $_POST['----'];
    $celular = $_POST['----'];
    $estado = $_POST['----'];
    $query = array(
      '----'      => $----,
      '----'     => $----,
      '----'   => $----,
      '----'    => $----
    );

    if(empty($----)){}
    if(empty($----)){}
    if(empty($----)){}
    if(empty($----)){
    } else {
      $status = DBCreate('si_posts', $query);
      if($status){
        echo "Cadastrado com sucesso!";
        unset($_POST);
      }else{
        echo "Falha";
      }
    }
  }

// Grava Registros

function DBCreate($table, array $query){

  $chamada = DBEscape($query);

  $fields = implode(', ', array_keys($query));
  $values = "'".implode("', '", $query)."'";

  $chamada = "INSERT INTO {$table} ( {$fields}) VALUES ( {$values})";
  return DBExecute($chamada);
}

// Executa Querys

function DBExecute($chamada){
  $link = DBConnect();
  $result = mysqli_query($link, $chamada) or die(mysqli_error($link));


  DBClose($link);
  return $result;

}*/

?>
