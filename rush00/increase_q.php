<?php
    session_start();
    $_SESSION['basket'][$_GET['id']] += 1;
    header("Location: gen_basket.php");