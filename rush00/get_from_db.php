<?php

function 	get_users()
{
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

    $sql = "SELECT id, login, fname, lname, email FROM users";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0)
    {
        // output data of each row
        while($row = mysqli_fetch_assoc($result))
        {
            $ret[] = $row;
        }
    }
    else
    {
        echo "0 results";
    }
    mysqli_close($conn);
    return ($ret);
}


function 	get_items()
{
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

    $sql = "SELECT id, title, description, price, img, category FROM items";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0)
    {
        // output data of each row
        while($row = mysqli_fetch_assoc($result))
        {
            $ret[] = $row;
        }
    }
    else
    {
        echo "0 results";
    }
    mysqli_close($conn);
    return ($ret);
}


function    get_accs()
{
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

    $sql = "SELECT login, email, passwd FROM users";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0)
    {
        // output data of each row
        while($row = mysqli_fetch_assoc($result))
        {
            $ret[] = $row;
        }
    }
    else
    {
        echo "0 results";
    }
    mysqli_close($conn);
    return ($ret);
}

function    get_orders()
{
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

    $sql = "SELECT id, login, item_id, quantity, reg_date FROM orders";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0)
    {
        // output data of each row
        while($row = mysqli_fetch_assoc($result))
        {
            $ret[] = $row;
        }
    }
    else
    {
        echo "0 results";
    }
    mysqli_close($conn);
    return ($ret);
}

function    get_categories()
{
    $servername = "localhost";
    $username = "root";
    $password = "BloodyPastor";
    $dbname = "shop_db";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT id, category FROM categories";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0)
    {
        // output data of each row
        while($row = mysqli_fetch_assoc($result))
        {
            $ret[] = $row;
        }
    }
    else
    {
        echo "0 results";
    }
    mysqli_close($conn);
    return ($ret);
}

function  push_orders($login, $item_id, $quantity)
{
    // CREATE SHOP DATA BASE
    $servername = "localhost";
    $username = "root";
    $password = "BloodyPastor";
    $db = "shop_db";

    $conn = mysqli_connect($servername, $username, $password, $db);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "INSERT INTO shop_db.orders (login, item_id, quantity, reg_date)
   VALUES ('$login', '$item_id','$quantity', '".time()."')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}
?>