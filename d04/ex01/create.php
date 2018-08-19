<?php

if (!$_POST["login"] || !$_POST["passwd"] || !$_POST["submit"] || $_POST["submit"] != "OK")
	echo "ERROR\n";
else
{
	if (!file_exists("../private"))
		mkdir("../private");
	if (!file_exists("../private/passwd"))
		file_put_contents("../private/passwd", "");
	$user_list = unserialize(file_get_contents("../private/passwd"));
	$key = 0;
	if ($user_list)
	{
		foreach ($user_list as $user) {
			if ($user["login"] == $_POST["login"])
			{
				echo "ERROR\n";
				$key = 1;
				break ;
			}
		}
	}
	if ($key == 0)
	{
		$new_user["login"] = $_POST["login"];
		$new_user["passwd"] = hash("whirlpool", $_POST["passwd"]);
		$user_list[] = $new_user;
		file_put_contents("../private/passwd", serialize($user_list));
		echo "OK\n";
	}
}
?>
