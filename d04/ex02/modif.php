<?php
if (!$_POST["login"] || !$_POST["oldpw"] || !$_POST["newpw"] || !$_POST["submit"] || $_POST["submit"] != "OK")
	echo "ERROR\n";
else
{
	$user_list = unserialize(file_get_contents("../private/passwd"));
	$key = 0;
	if ($user_list)
	{
		foreach ($user_list as $i => $user) {
			if ($user["login"] == $_POST["login"])
			{
				if ($user["passwd"] == hash("whirlpool", $_POST["oldpw"]))
				{
					$user_list[$i]["passwd"] = hash("whirlpool", $_POST["newpw"]);
					$key = 1;
					break ;
				}
			}
		}
	}
	if ($key == 1)
	{
		file_put_contents("../private/passwd", serialize($user_list));
		echo "OK\n";
	}
	else
		echo "ERROR\n";
}
?>
