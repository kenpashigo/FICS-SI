<?php  
  
  $semestre = $_GET['sem'] ?? 0;   
  
  require '../settings/link.php';

  $obj = new Connection();
  $link = $obj->link();

  $query = "SELECT * FROM si_semestres WHERE semestre = '$semestre' ORDER BY id ASC";
  $seleciona = $obj->query($query);
  $rows = mysqli_num_rows($seleciona);  

  if($rows <= 0){
  echo '<option>Semestre sem matéria cadastrada.</option>';
  } else {
    while($row = mysqli_fetch_assoc($seleciona)){
      $materia = $row['materia'];
      echo '<option value="'.$materia.'">'.$materia.'</option>';  
    }
  }
?>