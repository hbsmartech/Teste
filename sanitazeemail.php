<?php 

class Pessoa{

	private $email;



	public function getEmail(){

    return $this->email;

	}

	public function setEmail($e){
$filtro=filter_var($e,FILTER_SANITIZE_EMAIL);
$this->email=$filtro;
	}


	public function mostre(){

		echo("Oi tudo bem");
	}
}

$esta = new Pessoa();

$esta->setEmail("martindala40@gmail.com");
echo($esta->getEmail());

