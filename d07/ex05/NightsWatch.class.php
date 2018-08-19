<?php

class NightsWatch {

	private $arr = array();

	public function recruit($arg) {
		$this->arr[] = $arg;
	}
	public function fight() {
		foreach ($this->arr as $fighter) {
			if ($fighter instanceof IFighter)
				$fighter->fight();
		}
	}
}

?>