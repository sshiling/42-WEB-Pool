#!/usr/bin/php
<?php

function check_elem($elem1, $elem2)
{
	if ($elem1 && !$elem2)
		return (1);
	if (!$elem1 && $elem2)
		return (-1);
	$elem1 = mb_strtolower($elem1);
	$elem2 = mb_strtolower($elem2);
	if ($elem1 == $elem2)
		return (0);
	if ((ctype_alpha($elem1) && !ctype_alpha($elem2)) ||
		(is_numeric($elem1) && !is_numeric($elem2) && !ctype_alpha($elem2)))
		return (-1);
	if ((ctype_alpha($elem2) && !ctype_alpha($elem1)) ||
		(is_numeric($elem2) && !is_numeric($elem1) && !ctype_alpha($elem1)))
		return (1);
	return ($elem1 < $elem2) ? -1 : 1;	
}

function ft_sort_all($elem1, $elem2)
{
	$i = 0;
	while (!($res = check_elem($elem1[$i], $elem2[$i])))
		$i++;
	return ($res);
}

$i = 1;
if ($argc > 1)
{
	while ($i < $argc)
	{
		$str .= $argv[$i];
		$str .= " ";
		$i++;
	}
	$array = explode(" ", $str);
	$array = array_filter($array);
	usort($array, "ft_sort_all");
	$i = 0;
	while ($array[$i])
	{
		print("$array[$i]\n");
		$i++;
	}
}
?>