<?php
    session_start();
    $id = $_GET['var'];
    $_SESSION['basket']["$id"] += 1;
    header("Location: index.php");