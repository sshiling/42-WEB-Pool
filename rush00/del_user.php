<?php
    include "get_from_db.php";
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "BloodyPastor";
    $dbname = "shop_db";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $id = $_GET['var'];
    // sql to delete a record
    $sql = "DELETE FROM shop_db.users WHERE id=$id";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header("Location: create_users_edit.php");
    ?>
