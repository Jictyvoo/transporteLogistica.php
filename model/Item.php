<?php
	class Item{
		private $nome;
		private $descricao;
		private $volume;
		private $quantidade;
		private $destino;
		private $nomeEmpresa;
		private $bairroDestino;
		private $distancia;

		public function __construct($nomeReceived, $descricaoReceived, $volumeReceived, $quantidadeReceived, $destinoReceived/*, $nomeEmpresaReceived*/, $bairroDestinoReceived/*, $distanciaReceived*/){
			$this -> nome = $nomeReceived;
			$this -> descricao = $descricaoReceived;
			$this -> volume = $volumeReceived;
			$this -> quantidade = $quantidadeReceived;
			$this -> destino = $destinoReceived;
			/*$this -> nomeEmpresa = $nomeEmpresaReceived;*/
			$this -> bairroDestino = $bairroDestinoReceived;
			/*$this -> distancia = $distanciaReceived;*/
		}

		public function getDescricao(){
			return $this -> descricao;
		}

		public function getVolume(){
			return $this -> volume;
		}

		public function getQuantidade(){
			return $this -> quantidade;
		}

		public function getDestino(){
			return $this -> destino;
		}

		public function getNomeEmpresa(){
			return $this -> nomeEmpresa;
		}

		public function getBairroDestino(){
			return $this -> bairroDestino;
		}

		public function getDistancia(){
			return $this -> distancia;
		}
		
		public function getNome(){
			return $this -> nome;
		}

		public function setDescricao($descricaoReceived){
			$this -> descricao = $descricaoReceived;
		}

		public function setVolume($volumeReceived){
			$this -> volume = $volumeReceived;
		}

		public function setQuantidade($quantidadeReceived){
			$this -> quantidade = $quantidadeReceived;
		}

		public function setDestino($destinoReceived){
			$this -> destino = $destinoReceived;
		}

		public function setNomeEmpresa($nomeEmpresaReceived){
			$this -> nomeEmpresa = $nomeEmpresaReceived;
		}

		public function setBairroDestino($bairroDestinoReceived){
			$this -> bairroDestino = $bairroDestinoReceived;
		}
		
		public function setDistancia($distanciaReceived){
			$this -> distancia = $distanciaReceived;
		}
		
		public function setNome($nomeReceived){
			$this -> nome = $nomeReceived;
		}
	}
?>