<?php
    include "get_from_db.php";
    session_start();
    $all_items = get_items();
    file_put_contents("admin_items.php", "<?php\n?>\n<html>\n<head>\n<link rel='stylesheet' href='register.css'>\n</head>\n<body>\n<table class='users_table'>\n");
    foreach ($all_items as $user)
    {
        $id = $user['id'];
        $title = $user['title'];
        $descr = $user['description'];
        $price = $user['price'];
        file_put_contents("admin_items.php", "<tr>
    <td class='user_box'>$id</td><td class='user_box'>$title</td><td class='user_box'>$descr</td>
    <td class='user_box'>$price</td><td class='user_box' style='text-align: center'><a href='del_item.php?var=$id'>Delete</a></td>
    </tr>\n", FILE_APPEND);
    }
    file_put_contents("admin_items.php", "</table>\n</body>\n</html>", FILE_APPEND);
    header("Location: admin_items.php");