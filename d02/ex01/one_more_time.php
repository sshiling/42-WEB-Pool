#!/usr/bin/php
<?php
date_default_timezone_set("Europe/Paris");
if ($argc < 2)
	exit();
if (!preg_match("/^[A-Za-z][a-zéû]+ \d{1,2} [A-Za-z][a-zéû]+ \d{4} \d{2}:\d{2}:\d{2}$/", $argv[1]))
{
	print("Wrong Format\n");
	exit();		
}
$str = $argv[1];

$str = str_ireplace("janvier", "january", $str);
$str = str_ireplace("fevrier", "february", $str);
$str = str_ireplace("février", "february", $str);
$str = str_ireplace("mars", "march", $str);
$str = str_ireplace("avril", "april", $str);
$str = str_ireplace("mai", "may", $str);
$str = str_ireplace("juin", "june", $str);
$str = str_ireplace("juillet", "july", $str);
$str = str_ireplace("aout", "august", $str);
$str = str_ireplace("août", "august", $str);
$str = str_ireplace("septembre", "september", $str);
$str = str_ireplace("octobre", "october", $str);
$str = str_ireplace("novembre", "november", $str);
$str = str_ireplace("decembre", "december", $str);
$str = str_ireplace("décembre", "december", $str);

if (!strcmp($str, $argv[1]))
{
	print("Wrong Format\n");
	exit();		
}
$str2 = $str;
$str = str_ireplace("lundi", "monday", $str);
$str = str_ireplace("mardi", "tuesday", $str);
$str = str_ireplace("mercredi", "wednesday", $str);
$str = str_ireplace("jeudi", "thursday", $str);
$str = str_ireplace("vendredi", "friday", $str);
$str = str_ireplace("samedi", "saturday", $str);
$str = str_ireplace("dimanche", "sunday", $str);

if (!strcmp($str, $str2))
{
	print("Wrong Format\n");
	exit();		
}

print (strtotime($str));
?>