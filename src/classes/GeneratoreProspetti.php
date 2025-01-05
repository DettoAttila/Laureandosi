<?php
include 'ProspettoPDFCommissione.php';
include 'ProspettoPDFLaureando.php';
/**
 * @access public
 * @author attila
 */
class GeneratoreProspetti {
	public function generaPDFLaureando() {
		$prospetto = new ProspettoPDFLaureando();
		$prospetto->genera();
	}

	public function generaPDFCommissione() {
		$prospetto = new ProspettoPDFCommissione();
		$prospetto->genera();
	}
}
?>
