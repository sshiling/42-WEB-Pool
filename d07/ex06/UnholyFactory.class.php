<?php
class UnholyFactory {
	public $arr = array();

	public function absorb($arg) {
		if ($arg instanceof Fighter) {
			if (!in_array($arg, $this->arr)) {
				$this->arr[] = $arg;
				print "(Factory absorbed a fighter of type " . $arg->fighter_type . ")" . PHP_EOL;
			}
			else {
				print "(Factory already absorbed a fighter of type " . $arg->fighter_type . ")" . PHP_EOL;
			}
		}
		else {
			print "(Factory can't absorb this, it's not a fighter)" . PHP_EOL;
		}
	}
	public function fabricate($arg) {
		foreach ($this->arr as $fighter) {
			if ($arg == $fighter->fighter_type) {
					print "(Factory fabricates a fighter of type " . $arg . ")" . PHP_EOL;
					return ($fighter);
			}
		}
		print "(Factory hasn't absorbed any fighter of type " . $arg . ")" . PHP_EOL;
		return (NULL);
	}
}
?>