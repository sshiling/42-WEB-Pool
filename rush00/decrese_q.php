<?php
    session_start();
    $_SESSION['basket'][$_GET['id']] -= 1;
    if ($_SESSION['basket'][$_GET['id']] <= 0)
        unset($_SESSION['basket'][$_GET['id']]);
    header("Location: gen_basket.php");