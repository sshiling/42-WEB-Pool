<?php
    include "get_from_db.php";
    header("Location: install.php");
    echo "here\n";
    session_start();
    $all_items = get_items();
    $all_cats = get_categories();
    $cur_cat = "All";
    $cur_us = $_SESSION['logged_user'];
    if ($_GET['category'])
    {
        $cur_cat = $_GET['category'];
    }
    file_put_contents("landing.php", "<?php
session_start();
?>\n<html lang=\"en\">
<head>
<title>Page Title</title>
<meta charset=\"UTF-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<style>
* {
    box-sizing: border-box;
}

/* Style the body */
body {
    font-family: Arial;
    margin: 0;
}

/* Header/logo Title */
.header {
    padding: 15px;
    text-align: center;
    background: #1abc9c;
    color: white;
}

/* Increase the font size of the heading */
.header h1 {
    font-size: 40px;
}

/* Style the top navigation bar */
.navbar {
    overflow: hidden;
    background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
    float: left;
    display: block;
    color: white;
    text-align: center;
    padding: 14px 20px;
    text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
    float: right;
}

/* Change color on hover */
.navbar a:hover {
    background-color: #ddd;
    color: black;
}

/* Column container */
.row {  
    display: -ms-flexbox; /* IE10 */
    display: flex;
    -ms-flex-wrap: wrap; /* IE10 */
    flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
    -ms-flex: 20%; /* IE10 */
    flex: 20%;
    background-color: #f1f1f1;
    padding: 20px;
}

/* Main column */
.main {   
    -ms-flex: 80%; /* IE10 */
    flex: 80%;
    background-color: white;
    padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
}

/* Footer */
.footer {
    padding: 20px;
    text-align: right;
    background: #ddd;
    width: 100%;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
    .row {   
        flex-direction: column;
    }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
    .navbar a {
        float: none;
        width: 100%;
    }
}

* {
  box-sizing: border-box;
}

.box {
  float: left;
  padding: 1em;
  width: 50%;
}

.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 100%;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 2px 16px;
    height: 180px;
    text-align: right;
}

.container p {
  height: 42px;
  text-align: left;
}

.container h4 {
  text-align: left;
}

.btn {
    border: none; /* Remove borders */
    color: white; /* Add a text color */
    padding: 14px 28px; /* Add some padding */
    cursor: pointer; /* Add a pointer cursor on mouse-over */
    /*float: right;*/
}

.success {background-color: #4CAF50;} /* Green */
.success:hover {background-color: #46a049;}

.buy
{
    padding: 5px 30px;
    background-color: #CCCCCC;
    border: 2px solid #fff3b5;
    border-radius: 4px;
    position: absolute;
    right: 15px;
    bottom: 15px;
    font-family: arial;
    font-size: 15px;
    padding: 10px;
}

.main_box {
  margin: 0px auto;
  max-width: 1000px;
}

</style>
</head>
<body>
<div class=\"main_box\"> 
<div class=\"header\">
  <h1>Simple mini-shop</h1>
  <p>Rush00</p>
</div>

<div class=\"navbar\">");
if (!$_SESSION['logged_user'])
{
    file_put_contents("landing.php", "<a href=\"register_2.php\"class=\"right\">Register</a>
  <a href=\"login_2.php\"class=\"right\">Log In</a>", FILE_APPEND);
}
else
    {
 file_put_contents("landing.php", "<a href=\"if_admin.php\">Hello, $cur_us!</a><a href=\"logout.php\" class=\"right\">Log Out</a>", FILE_APPEND);
}
file_put_contents("landing.php", "<a href=\"gen_basket.php\" class=\"right\">Cart</a>
</div>

<div class=\"row\">
  <div class=\"side\">
", FILE_APPEND);
foreach ($all_cats as $cat) {
    $categ = $cat['category'];
    file_put_contents("landing.php", "<a href='index.php?category=$categ'><h3>$categ</h3></a>", FILE_APPEND);
}
file_put_contents("landing.php", "</div>
<div class=\"main\">\n", FILE_APPEND);
    foreach ($all_items as $item)
    {
        if ($cur_cat === $item['category'] || $cur_cat === "All") {
            $id = $item['id'];
            $img = $item['img'];
            $title = $item['title'];
            $descr = $item['description'];
            $price = $item['price'];
            file_put_contents("landing.php", "<div class=\"box\">
      <div class=\"card\">
        <img src=\"$img\" alt=\"Avatar\" style=\"width:100%\">
        <div class=\"container\">
          <h4><b>$cur_cat: $title</b></h4>
          <p>
            <?php echo substr(\"$descr\", 0, 80), '...'; ?>
          </p>
          <a href='add_to_basket.php?var=$id'><button class=\"btn success\">BUY $ $price</button></a>
        </div>
      </div>
    </div>
", FILE_APPEND);
        }
    }
    file_put_contents("landing.php", "  </div>
<div class=\"footer\">
  <h2>© rkyslyy:sshiling 2018</h2>
</div>
</div>
</body>
</html>", FILE_APPEND);
    header("Location: landing.php");
