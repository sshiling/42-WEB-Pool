<?php
function auth($login, $passwd)
{
	$user_list = unserialize(file_get_contents("../private/passwd"));
	if ($user_list)
	{
		foreach ($user_list as $user) {
			if ($user["login"] == $login && $user["passwd"] == hash("whirlpool", $passwd))
				return (true);
		}
		return (false);
	}
	else
		return (false);
}
?>