#!/usr/bin/php
<?php
$i = 1;
while ($i < $argc)
{
	$str .= $argv[$i];
	$str .= " ";
	$i++;
}
$array = explode(" ", $str);
$array = array_filter($array);
sort($array);
$i = 0;
while ($array[$i])
{
	print("$array[$i]\n");
	$i++;
}
?>