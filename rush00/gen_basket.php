<?php
    include "get_from_db.php";
    session_start();
    if ($_SESSION['logged_user']) {
        $all_items = get_items();
        $total = 0;
        if ($_GET['id'] && $_GET['act']) {
            if ($_GET['act'] === 'more') {
                $_SESSION['basket'][$_GET['id']] += 1;
            }
            if ($_GET['act'] === 'less') {
                $_SESSION['basket'][$_GET['id']] -= 1;
                if ($_SESSION['basket'][$_GET['id']] <= 0) {
                    unset($_SESSION['basket'][$_GET['id']]);
                }
            }
        }
        $basket = $_SESSION['basket'];
        $new_basket = array();
        foreach ($basket as $key => $value) {
            foreach ($all_items as $item) {
                if ($item['id'] == $key) {
                    $item['count'] = $value;
                    $new_basket[] = $item;
                }
            }
        }
        $_SESSION['ready'] = $new_basket;
        if (sizeof($basket) !== 0) {
            file_put_contents("basket.php", "<?php
?>\n<html>\n<head>\n<link rel='stylesheet' href='register.css'>\n</head>\n<body>\n<table class=\"basket_table\">
<tr><td colspan='6' style='text-align: center;' class='user_box'>Your basket</td></tr>
<tr><td class='user_box' style='text-align: center'>Title</td><td class='user_box' style='text-align: center'>Price</td><td class='user_box' style='text-align: center'>Quantity</td>
<td class='user_box' style='text-align: center'>Cost, $</td><td class='user_box' style='text-align: center'>More</td><td class='user_box' style='text-align: center'>Less</td></tr>");
            foreach ($new_basket as $item) {
                $title = $item['title'];
                $price = $item['price'];
                $count = $item['count'];
                $cost = $price * $count;
                $total += $cost;
                $id = $item['id'];
                file_put_contents("basket.php", "<tr>
        <td class='user_box'>$title</td><td class='user_box'>$ $price</td>
        <td class='user_box'>$count</td><td class='user_box'>$ $cost</td>
        <td class='user_box' style='text-align: center'><a href='gen_basket.php?id=$id&act=more'><button style='text-align: center'>+</button></a></td> <td class='user_box' style='text-align: center'><a href='gen_basket.php?id=$id&act=less'><button style='text-align: center'>-</button></a></td>
    </tr>\n", FILE_APPEND);
            }
            file_put_contents("basket.php", "<td colspan='3' class='user_box' style='text-align: center'></td><td class='user_box' style='text-align: center'>Total: $ $total</td><td colspan='2' class='user_box' style='text-align: center'></td>
</table>
<div><a href='thank_you.php'><button style='width: 20%; height: 10%; font-size: 4vw; border-radius: 5px'>Purchase</button></a></div>
<a href='index.php'>Back to shopping</a></body>\n</html>", FILE_APPEND);
        } else {
            file_put_contents("basket.php", "<?php\n?>\n<html>\n<head>\n<link rel='stylesheet' href='register.css'>\n</head>\n<body>
<div><h1 style='color: white; text-align: center'>Your basket is empty yet</h1>
<a href='index.php' style='color: white'><div style='color=white'>Back to shopping</div></a>
</div>
</body></html>");
        }
        header("Location: basket.php");
    }
else {
    header("Location: not_logged_in.php");
}