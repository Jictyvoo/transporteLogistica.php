<?php

	class CodificacaoPaginas {

		private $codigos;
		private $paginasChaves;
		private $paginasExistentes;
		private $jaUsado;

		public function __construct() {
			$this -> jaUsado = false;

			$this -> paginasExistentes = array("selecaoCaminhao.php", "insereItens.php", "itensInseridos.php", "resultPage.php");
			for($position = 0; $position < count($this -> paginasExistentes); $position += 1)
				$this -> codigos[$position] = $this -> nomeCodificado();
		}

		public function nomeCodificado() {
			$stringGerada = "";
			$tamanhoRetorno = 17;

			$capsLock = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
			$caracteres = "abcdefghijklmnopqrstuvwxyz";
			$numeros = "0123456789";
			$simbolos = "!@$^*_=-/.";
			$semente = str_split($capsLock.$caracteres.$numeros.$simbolos);

			for ($position = 0; $position < $tamanhoRetorno; $position += 1) { 
				$stringGerada = $stringGerada.$semente[rand(0, count($semente) - 1)];
			}

			return $stringGerada;
		}

		public function associaCodificacaoPagina(){
			if($this -> jaUsado == true)
				$this -> destroyCodes();
			else
				$this -> jaUsado = true;

			for($position = 0; $position < count($this -> paginasExistentes); $position += 1){
				$chaves = $this -> nomeCodificado();
				$this -> codigos[$position] = $chaves;
				$this -> paginasChaves[$this -> codigos[$position]] = $this -> paginasExistentes[$position];
			}
		}

		private function destroyCodes(){
			if(isset($this -> codigos)){
				foreach ($this -> codigos as $chaves) {
					unset($this -> paginasChaves[$chaves]);
				}
			}
		}

		private function verificaCodigoExiste($testaExiste){
			foreach ($this -> codigos as $chaves){
				if($testaExiste == $chaves){
					return $chaves;
				}
			}
			return $this -> codigos[0];
		}

		public function getCodigoPagina($chavePagina){
			return ($this -> paginasChaves != null) ? $this -> paginasChaves[$this -> verificaCodigoExiste($chavePagina)] : $this -> paginasExistentes[0];
		}

		public function getCodigos($position){
			if($position < 0 || $position >= count($this -> codigos))
				return $this -> codigos[0];
			return $this -> codigos[$position];
		}
	}
?>