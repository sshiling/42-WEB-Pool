<?php
include "get_from_db.php";
session_start();
$accounts = get_accs();
if ($_POST['submit'] === "Cancel Log In")
{
    header("Location: index.php");
    return ;
}
if ($_POST['login'] && $_POST['passwd']
    && $_POST['login'] !== "" && $_POST['passwd'] !== "")
{
    if ($_POST['login'] === "admin" && $_POST['passwd'] === "123456")
    {
        $_SESSION['logged_user'] = $_POST['login'];
        header("Location: admin.php");
        return ;
    }
    foreach ($accounts as $n => $account)
    {
        if ($account['login'] == $_POST['login'])
        {
           if ($accounts[$n]['passwd'] == hash("whirlpool", $_POST['passwd']))
           {
               $_SESSION['logged_user'] = $_POST['login'];
               header("Location: index.php");
               return ;
           }
        }
    }
    header("Location: wrong_passwd.php");
    return ;
}
?>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
<div class="middle_block">
    <form action="login_2.php" method="POST" class="register">
        Username: <br /><input type="text" name="login" value="">
        <br />
        Password: <br /><input type="password" name="passwd" value=""><br />
        <input type="submit" name="submit" value="Log In" id="submit">
        <input type="submit" name="submit" value="Cancel Log In" id="submit">
    </form>
</div>
</body>
</html>
