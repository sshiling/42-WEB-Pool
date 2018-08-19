#!/usr/bin/php
<?php
	if ($argc < 2)
		exit();
	$array = explode(" ", trim($argv[1]));
	$array = array_filter($array);
	$first = array_shift($array);
	$i = 0;
	while ($array[$i])
	{
		print("$array[$i] ");
		$i++;
	}
	print("$first\n");
?>