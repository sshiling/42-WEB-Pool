<?php
session_start();
if ($_POST['submit'] === "Cancel Log In")
{
    header("Location: landing.php");
    return ;
}
if ($_POST['login'] && $_POST['passwd']
    && $_POST['login'] !== "" && $_POST['passwd'] !== "")
{
    $accounts = unserialize(file_get_contents("./users/users.csv"));
    foreach ($accounts as $n => $account)
    {
        if ($account['login'] == $_POST['login'])
        {
            if ($accounts[$n]['passwd'] === hash("whirlpool", $_POST['passwd']))
            {
                $_SESSION['logged_user'] = $_POST['login'];
                header("Location: landing.php");
                return ;
            }
            else
            {
                header("Location: wrong_passwd.php");
                return ;
            }
        }
    }
}
?>
<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
<div class="middle_block">
        <a href="create_items_edit.php"><button class="admin_buttons">View items</button></a>
        <a href="create_users_edit.php"><button class="admin_buttons">View users</button></a>
        <a href="create_orders_edit.php"><button class="admin_buttons">View orders</button></a>
        <a href="index.php"><button class="admin_buttons">To landing page</button></a>
</div>
</body>
</html>