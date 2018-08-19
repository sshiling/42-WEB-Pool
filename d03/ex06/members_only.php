<?php
	if ($_SERVER["PHP_AUTH_USER"] == "zaz" &&
		$_SERVER["PHP_AUTH_PW"] == "jaimelespetitsponeys")
	{
		header('Content-Type:text/html');
		$img = file_get_contents("../img/42.png");
		$img = base64_encode($img);
		echo "<html><body>
Hello Zaz<br />
<img src='data:image/png;base64,".$img."'>
</body></html>\n";
	}
	else
	{
		 header('HTTP/1.0 401 Unauthorized');
		 header('WWW-Authenticate: Basic realm="Member area"');
		 echo "<html><body>That area is accessible for members only</body></html>\n";
	}
?>