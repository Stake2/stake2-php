<?php 

class Carro {

	private $modelo;
	private $motor;
	private $current_year;

	public function getModelo() {

		return $this -> modelo;
	
	}

	public function setModelo($modelo) {

		$this -> modelo = $modelo;

	}

	public function getMotor():float {

		return $this -> motor;

	}

	public function setMotor($motor) {

		$this -> motor = $motor;

	}

	public function getAno():int {

		return $this -> ano;

	}

	public function setAno($current_year) {

		$this -> ano = $current_year;

	}

	public function exibir() {

		return array(
			"modelo" => $this -> getModelo(),
			"motor" => $this -> getMotor(),
			"ano" => $this -> getAno(),
		);

	}

}

$gol = new Carro();
$gol -> setModelo("Gol GT");
$gol -> setMotor("1.6");
$gol -> setAno("2017");

var_dump($gol -> exibir());

?>