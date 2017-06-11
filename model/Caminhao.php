<?php
	class Caminhao{
		private $volumeBau;
		private $modeloContainer;
		private $consumoDeCombustivel;
		private $modeloCaminhao;

		public function __construct($volumeReceived, $modeloContainerReceived, $consumoReceived, $modeloReceived){
			$this -> volumeBau = floatval($volumeReceived);
			$this -> modeloContainer = $modeloContainerReceived;
			$this -> consumoDeCombustivel = floatval($consumoReceived);
			$this -> modeloCaminhao = $modeloReceived;
		}

		public function getVolumeBau(){
			return $this -> volumeBau;
		}

		public function getConsumoDeCombustivel(){
			return $this -> consumoDeCombustivel;
		}

		public function getModeloCaminhao(){
			return $this -> modeloCaminhao;
		}

		public function getModeloContainer(){
			return $this -> modeloContainer;
		}

		public function setVolumeBau($VolumeBauReceived){
			$this -> volumeBau = $VolumeBauReceived;
		}

		public function setConsumoDeCombustivel($ConsumoDeCombustivelReceived){
			$this -> consumoDeCombustivel = $ConsumoDeCombustivelReceived;
		}

		public function setModeloCaminhao($ModeloCaminhaoReceived){
			$this -> modeloCaminhao = $ModeloCaminhaoReceived;
		}

		public function setModeloContainer($modeloContainerReceived){
			$this -> modeloContainer = $modeloContainerReceived;
		}

	}
?>