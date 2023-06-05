<?php

class Caneta
{

	var $estaTampada;
	var $ponta;
	var $carga;
	var $modelo;
	var $cor;

	function status()
	{

		echo "A caneta é da cor " + $this->cor;
		echo "O modelo é " + $this->modelo;
		echo "A ponta é " + $this->ponta;
		echo "A carga é " + $this->carga;
		echo "Está tampada  " + $this->estaTampada;
	}

	function rabiscar()
	{
		if ($this->estaTampada) {
			return "Não pode rabiscar </br>";
		}
		return "Estou rabiscando </br>";
	}

	function tamparDestanpar()
	{
		$this->estaTampada = !$this->estaTampada;
		if ($this->estaTampada) {
			echo "A caneta está tampada </br>";
		} else {
			echo "A caneta esta destampada </br>";
		}
	}
}
