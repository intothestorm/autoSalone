
<?php

class Auto{
	const TARIFFA1 = 2.58;
	const TARIFFA2 = 3.87;

	private $marca = null;
	private $motore = null;
	private $potenza = 0;
	private $targa = null;

	public function __construct($marca, $motore, $potenza){
		$this->$marca = $marca;
		$this->$motore = $motore;
		$this->$potenza = $potenza;
	}

	public function get_marca() {
		return $this->marca;
	}

	public function get_motore() {
		return $this->motore;
	}

	public function get_potenza() {
		return $this->potenza;
	}

	public function get_targa() {
		return $this->targa;
	}

	public function set_targa($new_targa) {
		$this->targa = $new_targa;
	}

	public function getDati(){
		$dati = 'Marca: ' . $this->marca . '\n';
		$dati .= 'Motore: ' . $this->motore . '\n';
		$dati .= 'Potenza:' . $this->potenza;

		if(isSet($this->targa))
			$dati .= 'Targa: ' . $this->targa;

		return $dati;
	}

	public function calcolaBollo(){
		if($this->motore == 'benzina'){
			if($this->potenza > 0 && $this->potenza < 100)
				$bollo += $potenza*TARIFFA1;
			else
				$bollo += $potenza*TARIFFA2;
		}
		return $bollo;
	}

}

?>
