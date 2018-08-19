<?php

class Jaime extends Lannister {
		public function sleepWith($arg) {
			if (get_parent_class($arg) == "Lannister" && get_class($arg) == "Cersei")
				print ("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
			else if (get_parent_class($arg) == "Stark" && get_class($arg) == "Sansa")
				print ("Let's do this." . PHP_EOL);
			else if (get_parent_class($arg) == "Lannister" && get_class($arg) == "Tyrion")
				print ("Not even if I'm drunk !" . PHP_EOL);
	}
}

?>