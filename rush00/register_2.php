<?php
include "get_from_db.php";
if ($_POST['submit'] === "Cancel Registration")
{
    header("Location: index.php");
    return ;
}
if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] && $_POST['submit'] === "Register" && $_POST['confpasswd']
    && $_POST['fname'] && $_POST['lname']) {
    $accounts = get_accs();
    foreach ($accounts as $account) {
        if (($account['login'] == $_POST['login']) || ($account['email'] == $_POST['email']))
        {
            header("Location: already_exists.php");
            return;
        }
    }
    if ($_POST['passwd'] !== $_POST['confpasswd']) {
        header("Location: not_confirmed_pw.php");
        return ;
    }
    $tmp['fname'] = $_POST['fname'];
    $tmp['lname'] = $_POST['lname'];
    $tmp['login'] = $_POST['login'];
    $tmp['passwd'] = hash("whirlpool", $_POST['passwd']);
    $tmp['email'] = $_POST['email'];

    $servername = "localhost";
    $username = "root";
    $password = "BloodyPastor";
    $db = "shop_db";
    $conn = mysqli_connect($servername, $username, $password, $db);
    $x_time = time();
    $login = $tmp['login'];
    $pass = $tmp['passwd'];
    $fname = $tmp['fname'];
    $lname = $tmp['lname'];
    $email = $tmp['email'];
    $sql = "INSERT INTO shop_db.users (login, passwd, fname, lname, email, reg_date)
    VALUES ('$login', '$pass', '$fname', '$lname', '$email', '$x_time')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
    var_dump($login);
    var_dump($pass);
    var_dump($fname);
    var_dump($lname);
    var_dump($x_time);
    header("Location: registered.php");
    return ;
}
 if ($_POST['login'] === "" || $_POST['passwd'] === "" || $_POST['confpasswd'] === ""
     || $_POST['fname'] === "" || $_POST['lname'] === "")
 {
     header("Location: empty_fields.php");
     return ;
 }
?>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
<div class="middle_block">
    <form action="register_2.php" method="POST" class="register">
        First name: <br /><input type="text" name="fname" value="">
        <br />
        Last name: <br /><input type="text" name="lname" value="">
        <br />
        E-Mail: <br /><input type="text" name="email" value="">
        <br />
        Username: <br /><input type="text" name="login" value="">
        <br />
        Password: <br /><input type="password" name="passwd" value=""><br />
        Confirm password: <br /><input type="password" name="confpasswd" value=""><br />
        <input type="submit" name="submit" value="Register" id="submit">
        <input type="submit" name="submit" value="Cancel Registration" id="submit">
    </form>
</div>
</body>
</html>
