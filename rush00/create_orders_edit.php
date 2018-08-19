<?php
    include "get_from_db.php";
    session_start();
    $all_orders = get_orders();
    if (!$all_orders)
    {
        echo "There are no orders";
        header("Location: admin.php");
    }
    file_put_contents("admin_orders.php", "<?php\n?>\n<html>\n<head>\n<link rel='stylesheet' href='register.css'>\n</head>\n<body>\n<table class='users_table'>\n
<tr>
    <td class='user_box'>ID</td><td class='user_box'>LOGIN</td><td class='user_box'>Item ID</td>
    <td class='user_box'>Quantity</td><td class='user_box'>Order date</td>
    </tr>");
    foreach ($all_orders as $order)
    {
        $id = $order['id'];
        $login = $order['login'];
        $itemid = $order['item_id'];
        $quant = $order['quantity'];
        $reg_d = $order['reg_date'];
        file_put_contents("admin_orders.php", "<tr>
    <td class='user_box'>$id</td><td class='user_box'>$login</td><td class='user_box'>$itemid</td>
    <td class='user_box'>$quant</td><td class='user_box'>$reg_d</td>
    </tr>\n", FILE_APPEND);
    }
    file_put_contents("admin_orders.php", "</table>\n</body>\n</html>", FILE_APPEND);
    header("Location: admin_orders.php");