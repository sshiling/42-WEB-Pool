<?php
    session_start();
    if ($_SESSION['logged_user'] === 'admin')
    {
        header ('Location: admin.php');
    }
    else
    {
        header ('Location: index.php');
    }