<?php	
	
  require '../settings/link.php';
  $obj = new Connection();  
	$link = $obj->link();
	

	$month = $_GET['sem'];
	if($month < 10) { $month = '0'.$month; }

	$query = "SELECT * FROM si_eventos WHERE mes = '$month' ORDER BY dia ASC";	
	$select = $obj->query($query);
	$result = mysqli_num_rows($select);


	if($result < 1) {
		echo '<div class="eventos-data">';
		echo '<div id="dia"><p>-</p></div>';
		echo '<div id="dia"><p>-</p></div>';
		echo '<div id="mater"><p>-</p></div>';
		echo '<div id="descricao"><p>-</p></div></div>';					
	} else {
			while ($result = mysqli_fetch_assoc($select)) {
				$dia = $result['dia'];
				$mes = $result['mes'];
				$materia = $result['materia'];
				$evento = $result['evento'];
?>

	<div class="eventos-data">
		<div id="dia"><p><?=$dia?></p></div>
		<div id="dia"><p><?=$mes?></p></div>
		<div id="mater"><p><?=$materia?></p></div>
		<div id="descricao"><p><?=$evento?></p></div>
	</div>

<?php }} ?>