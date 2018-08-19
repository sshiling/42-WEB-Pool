#!/usr/bin/php
<?php
	if ($argc != 2)
	{
		print("Incorrect Parameters\n");
		exit ;
	}
	if (!preg_match("/^\s*(?P<n1>[\-\+]{0,1}\d+)\s*(?P<do>[\+\-\/\*\%])\s*(?P<n2>[\-\+]{0,1}\d+)\s*$/", $argv[1], $res))
	{
		print("Syntax Error\n");
		exit ;		
	}
	$do = trim($res["do"]);
	$n1 = intval(trim($res["n1"]));
	$n2 = intval(trim($res["n2"]));
	if ($n2 == 0 AND ( $do == "/" OR $do == '%' ))
	{
		print("Incorrect Parameters\n");
		exit ;
	}
	if ($do == '+')
		$res = $n1 + $n2;
	if ($do == '-')
		$res = $n1 - $n2;
	if ($do == '*')
		$res = $n1 * $n2;
	if ($do == '/')
		$res = $n1 / $n2;
	if ($do == '%')
		$res = $n1 % $n2;
	print("$res\n");
?>