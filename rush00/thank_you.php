<?php
    include "get_from_db.php";
    session_start();
    unset($_SESSION['basket']);
    $array = $_SESSION['ready'];
    unset($_SESSION['ready']);
    $login = $_SESSION['logged_user'];
    $total = array();
    foreach ($array as $key => $value)
    {
        $id = $value["id"];
        $count = $value["count"];
        push_orders($login, $id, $count);
    }
    header("refresh:3;url=index.php");
?>
<html>
<head>
    <title>Thank You</title>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
<div class="exists">
    <p>Thank You for purchase<br/>You will be now transferred to main page</p>
</div>
</body>
</html>