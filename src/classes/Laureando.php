<?php
/**
 * @access public
 * @author attila
 */
class Laureando {
	private $_nome;
	private $_cognome;
	private $_matricola;
	private $_corsoLaurea;
	private $_email;
	private $_immatricolazione;
	private $_esamiDati = array();

	/**
	 * @access public
	 */
	public function CFUtotali() {
		$totaleCFU = 0;
		foreach ($this->_esamiDati as $esame) {
		    $totaleCFU += $esame->cfu;
		}
		return $totaleCFU;
	}
}
?>
