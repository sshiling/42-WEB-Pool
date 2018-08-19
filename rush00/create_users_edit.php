<?php
include "get_from_db.php";
session_start();
$all_users = get_users();
file_put_contents("admin_users.php", "<?php\n?>\n<html>\n<head>\n<link rel='stylesheet' href='register.css'>\n</head>\n<body>\n<table class='users_table'>\n");
foreach ($all_users as $user)
{
    if ($user['login'] !== 'admin') {
        $id = $user['id'];
        $login = $user['login'];
        $fname = $user['fname'];
        $lname = $user['lname'];
        $email = $user['email'];
        file_put_contents("admin_users.php", "<tr>
<td class='user_box'>$id</td><td class='user_box'>$login</td><td class='user_box'>$fname</td>
<td class='user_box'>$lname</td><td class='user_box'>$email</td><td class='user_box' style='text-align: center'><a href='del_user.php?var=$id'>Delete</a></td>
</tr>\n", FILE_APPEND);
    }
}
file_put_contents("admin_users.php", "</table>\n</body>\n</html>", FILE_APPEND);
header("Location: admin_users.php");