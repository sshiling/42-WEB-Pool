#!/usr/bin/php
<?php
	if ($argc != 4)
	{
		print("Incorrect Parameters\n");
		exit ;
	}
	if ($argv[2] == '+')
		$res = $argv[1] + $argv[3];
	if ($argv[2] == '-')
		$res = $argv[1] - $argv[3];
	if ($argv[2] == '*')
		$res = $argv[1] * $argv[3];
	if ($argv[2] == '/')
		$res = $argv[1] / $argv[3];
	if ($argv[2] == '%')
		$res = $argv[1] % $argv[3];
	print("$res\n");
?>