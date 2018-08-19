#!/usr/bin/php
<?php

function change_in_quotes($text)
{
	return($text[1].strtoupper($text[2]).$text[3]);
}

function change_other_texts($text)
{
	return(strtoupper($text[0]));	
}

function change_texts($text)
{
	$text = preg_replace_callback("/( title=\")(.*?)(\")/", "change_in_quotes", $text);
	$text = preg_replace_callback("/>.*?</", "change_other_texts", $text);
	return($text[0]);
}

if (!file_exists($argv[1]))
  exit;
$file = fopen($argv[1], "r");
$text = fread($file, filesize($argv[1]));
$text = preg_replace_callback("/(<a )(.*?)(>)(.*)(<\/a>)/", "change_texts", $text);
print("$text\n");
?>