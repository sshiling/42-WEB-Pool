<?php
?>
<html>
<head>
<link rel='stylesheet' href='register.css'>
</head>
<body>
<table class="basket_table">
<tr><td colspan='6' style='text-align: center;' class='user_box'>Your basket</td></tr>
<tr><td class='user_box' style='text-align: center'>Title</td><td class='user_box' style='text-align: center'>Price</td><td class='user_box' style='text-align: center'>Quantity</td>
<td class='user_box' style='text-align: center'>Cost, $</td><td class='user_box' style='text-align: center'>More</td><td class='user_box' style='text-align: center'>Less</td></tr><tr>
        <td class='user_box'>Air Max Tavas Running Shoes</td><td class='user_box'>$ 100</td>
        <td class='user_box'>2</td><td class='user_box'>$ 200</td>
        <td class='user_box' style='text-align: center'><a href='gen_basket.php?id=8&act=more'><button style='text-align: center'>+</button></a></td> <td class='user_box' style='text-align: center'><a href='gen_basket.php?id=8&act=less'><button style='text-align: center'>-</button></a></td>
    </tr>
<tr>
        <td class='user_box'>Men High Ankle Soccer Shoes</td><td class='user_box'>$ 100</td>
        <td class='user_box'>1</td><td class='user_box'>$ 100</td>
        <td class='user_box' style='text-align: center'><a href='gen_basket.php?id=1&act=more'><button style='text-align: center'>+</button></a></td> <td class='user_box' style='text-align: center'><a href='gen_basket.php?id=1&act=less'><button style='text-align: center'>-</button></a></td>
    </tr>
<td colspan='3' class='user_box' style='text-align: center'></td><td class='user_box' style='text-align: center'>Total: $ 300</td><td colspan='2' class='user_box' style='text-align: center'></td>
</table>
<div><a href='thank_you.php'><button style='width: 20%; height: 10%; font-size: 4vw; border-radius: 5px'>Purchase</button></a></div>
<a href='index.php'>Back to shopping</a></body>
</html>