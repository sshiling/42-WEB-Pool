<?php

class Tyrion extends Lannister {
		public function sleepWith($arg) {
			if (get_parent_class($arg) == "Lannister" && get_class($arg) == "Cersei")
				print ("Not even if I'm drunk !" . PHP_EOL);
			else if (get_parent_class($arg) == "Stark" && get_class($arg) == "Sansa")
				print ("Let's do this." . PHP_EOL);
			else if (get_parent_class($arg) == "Lannister" && get_class($arg) == "Jaime")
				print ("Not even if I'm drunk !" . PHP_EOL);
	}
}

?>