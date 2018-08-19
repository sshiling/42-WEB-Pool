<?php
    include "get_from_db.php";
    session_start();
    $id = $_GET['id'];
    $all_items = get_items();
    $new_items = $all_items;
?>
<html>
<head>
    <title>Edit item</title>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
<div class="middle_block">
    <form action="edit_item.php" method="POST" class="register">
        New title: <br /><input type="text" name="fname" value="">
        <br />
        Last name: <br /><input type="text" name="lname" value="">
        <br />
        E-Mail: <br /><input type="text" name="email" value="">
        <br />
        Username: <br /><input type="text" name="login" value="">
        <br />
        Password: <br /><input type="password" name="passwd" value=""><br />
        Confirm password: <br /><input type="password" name="confpasswd" value=""><br />
        <input type="submit" name="submit" value="Register" id="submit">
        <input type="submit" name="submit" value="Cancel Registration" id="submit">
    </form>
</div>
</body>
</html>

