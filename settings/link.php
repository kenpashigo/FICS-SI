<?php

	require_once 'settings.php';

  class connection {
  	private $host = DB_HOSTNAME;
  	private $username = DB_USERNAME;
  	private $password = DB_PASSWORD;
  	private $database = DB_DATABASE;
  	public  $charset  = DB_CHARSET;

  	public function link() {
  		$link = mysqli_connect($this->host, $this->username, $this->password, $this->database) or die(mysqli_error($link));
  		mysqli_set_charset($link, $this->charset);
  		return $link;
  	}

  	public function query($query) {
  		$link = $this->link();
  		$result = mysqli_query($link, $query);
  		return $result;
  	}

  }  

  //Proteção SQL Injection

	function DBEscape($dados){
		$link = DBConnect();

		if(!is_array($dados)){
			$dados = mysqli_real_escape_string($link, $dados);
		}else {
			$arr = $dados;
			foreach ($arr as $key => $value) {
				$key = mysqli_real_escape_string($link, $key);
				$value = mysqli_real_escape_string($link, $value);

				$dados[$key] = $value;
			}
		}
		DBClose($link);
	}

  // Fecha Conexão

	function DBClose($link){
		@mysqli_close($link) or die(mysqli_error($link));

	}

	function Crypto($param){
		$param = hash('whirlpool', hash('sha512', hash('sha384', hash('sha256', sha1(md5($param))))));	
		return $param;
	}

	function horas($data, $horas) {
		
		$data = explode('/', $data);
		$datePost = $data[2].'-'.$data[1].'-'.$data[0].' '.$horas;
		$dateNow = date("Y-m-d H:i:s");

		$seg = round(abs(strtotime($dateNow) - strtotime($datePost)));
		if($seg>60){$seg=$seg%60;}
		$min = round(abs(strtotime($dateNow) - strtotime($datePost)) / 60);
		if($min > 60) {$min = $min % 60;}
		$horas = round(abs(strtotime($dateNow) - strtotime($datePost)) / (60*60));
		if($horas > 24) {$horas = $horas % 24;}
		$dias = round(abs(strtotime($dateNow) - strtotime($datePost)) / ((60*60)*24));
		if($dias > 30) {$mes = round($dias / 30);}		
		if($dias > 365) {$anos = round($dias / 365);}		

		if($anos > 0) {
			if($anos > 1) { return $anos.' anos.';} else { return 'um ano.';}
		} elseif($mes > 0) {
			if($mes > 1) { return $mes.' meses.'; } else { return 'um mês.'; }		
		} elseif($dias > 0) {
			if($dias > 1) { return $dias.' dias.'; } else { return 'um dia.'; }
		} elseif($horas > 0) {
			if($horas > 1) { return $horas.' horas.'; } else { return 'uma hora.'; }
		} elseif($min > 0) {
			if($min > 1) { return $min.' minutos.'; } else { return 'um minuto.'; }
		} else { return 'recém postado.'; }
	}

?>
