#!/usr/bin/php
<?php
if ($argc < 2)
	exit();
$str = trim(preg_replace('/\s\s+/', ' ', $argv[1]));
print("$str\n");
?>