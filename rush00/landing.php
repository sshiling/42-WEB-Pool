<?php
session_start();
?>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<div class="main_box"> 
<div class="header">
  <h1>Simple mini-shop</h1>
  <p>Rush00</p>
</div>

<div class="navbar"><a href="register_2.php"class="right">Register</a>
  <a href="login_2.php"class="right">Log In</a><a href="gen_basket.php" class="right">Cart</a>
</div>

<div class="row">
  <div class="side">
<a href='index.php?category=All'><h3>All</h3></a><a href='index.php?category=Adidas'><h3>Adidas</h3></a><a href='index.php?category=Asics'><h3>Asics</h3></a><a href='index.php?category=Jordan'><h3>Jordan</h3></a><a href='index.php?category=New Balance'><h3>New Balance</h3></a><a href='index.php?category=Nike'><h3>Nike</h3></a></div>
<div class="main">
<div class="box">
      <div class="card">
        <img src="resources/adidas/Snickers_1.jpg" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b>All: Men High Ankle Soccer Shoes</b></h4>
          <p>
            <?php echo substr("Adidas Primeknit upper wraps the foot in adaptive support and ultralight comfort PURECUT offers a sleek compression fit.", 0, 80), '...'; ?>
          </p>
          <a href='add_to_basket.php?var=1'><button class="btn success">BUY $ 100</button></a>
        </div>
      </div>
    </div>
<div class="box">
      <div class="card">
        <img src="resources/nike/Snickers_8.jpg" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b>All: Air Max Tavas Running Shoes</b></h4>
          <p>
            <?php echo substr("Rippy rubber sole with waffle pattern for increased traction. Suitable for party, sports, indoor, outdoor", 0, 80), '...'; ?>
          </p>
          <a href='add_to_basket.php?var=8'><button class="btn success">BUY $ 100</button></a>
        </div>
      </div>
    </div>
<div class="box">
      <div class="card">
        <img src="resources/nike/Snickers_9.jpg" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b>All: Men Fashion Breathable Sneakers</b></h4>
          <p>
            <?php echo substr("High elastic MD outsole,slip resistant,easy to manage any area. Casual and trend.", 0, 80), '...'; ?>
          </p>
          <a href='add_to_basket.php?var=9'><button class="btn success">BUY $ 100</button></a>
        </div>
      </div>
    </div>
<div class="box">
      <div class="card">
        <img src="resources/nike/Snickers_10.jpg" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b>All: Air Max Flair Mesh Trainers</b></h4>
          <p>
            <?php echo substr("Removable, textile lined and foam padded insole for cushioning and support.", 0, 80), '...'; ?>
          </p>
          <a href='add_to_basket.php?var=10'><button class="btn success">BUY $ 100</button></a>
        </div>
      </div>
    </div>
<div class="box">
      <div class="card">
        <img src="resources/new_balance/Snickers_11.jpg" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b>All: Fresh Foam Cruz Running Shoe</b></h4>
          <p>
            <?php echo substr("Shaft measures approximately low-top from arch. Molded Foam comfort insert.", 0, 80), '...'; ?>
          </p>
          <a href='add_to_basket.php?var=11'><button class="btn success">BUY $ 100</button></a>
        </div>
      </div>
    </div>
<div class="box">
      <div class="card">
        <img src="resources/new_balance/Snickers_12.jpg" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b>All: Trail Running Shoe</b></h4>
          <p>
            <?php echo substr("AT tread outsole. PU Sockliner. Injection molded EVA. All references to 12 mm drop are approximate.", 0, 80), '...'; ?>
          </p>
          <a href='add_to_basket.php?var=12'><button class="btn success">BUY $ 100</button></a>
        </div>
      </div>
    </div>
<div class="box">
      <div class="card">
        <img src="resources/new_balance/Snickers_13.jpg" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b>All: MX608v4 Training Shoe</b></h4>
          <p>
            <?php echo substr("Training shoe with 100% Leather upper featuring dual-density collar.", 0, 80), '...'; ?>
          </p>
          <a href='add_to_basket.php?var=13'><button class="btn success">BUY $ 100</button></a>
        </div>
      </div>
    </div>
<div class="box">
      <div class="card">
        <img src="resources/new_balance/Snickers_14.jpg" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b>All: 515V1 Sneaker</b></h4>
          <p>
            <?php echo substr("Shaft measures approximately low-top from arch. EVA midsole and heel.", 0, 80), '...'; ?>
          </p>
          <a href='add_to_basket.php?var=14'><button class="btn success">BUY $ 100</button></a>
        </div>
      </div>
    </div>
<div class="box">
      <div class="card">
        <img src="resources/new_balance/Snickers_15.jpg" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b>All: M420v3 Running Shoe</b></h4>
          <p>
            <?php echo substr("New Balance, is dedicated to helping athletes achieve their goals.", 0, 80), '...'; ?>
          </p>
          <a href='add_to_basket.php?var=15'><button class="btn success">BUY $ 100</button></a>
        </div>
      </div>
    </div>
<div class="box">
      <div class="card">
        <img src="resources/asics/Snickers_16.jpg" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b>All: Gel-Venture 6 Running Shoe</b></h4>
          <p>
            <?php echo substr("Rear foot GEL Cushioning System: Attenuates shock during impact phase and allows for a smooth transition to midstance.", 0, 80), '...'; ?>
          </p>
          <a href='add_to_basket.php?var=16'><button class="btn success">BUY $ 100</button></a>
        </div>
      </div>
    </div>
<div class="box">
      <div class="card">
        <img src="resources/asics/Snickers_17.jpg" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b>All: Gel-Venture 5 Running Shoe</b></h4>
          <p>
            <?php echo substr("Outdoor-ready runner with mesh and brushstroke-patterned underlays.", 0, 80), '...'; ?>
          </p>
          <a href='add_to_basket.php?var=17'><button class="btn success">BUY $ 100</button></a>
        </div>
      </div>
    </div>
<div class="box">
      <div class="card">
        <img src="resources/asics/Snickers_18.jpg" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b>All: Gel-Contend 4 Running Shoe</b></h4>
          <p>
            <?php echo substr("Rearfoot GEL Cushioning System: Attenuates shock during impact phase and allows for a smooth transition to midstance.", 0, 80), '...'; ?>
          </p>
          <a href='add_to_basket.php?var=18'><button class="btn success">BUY $ 100</button></a>
        </div>
      </div>
    </div>
<div class="box">
      <div class="card">
        <img src="resources/asics/Snickers_19.jpg" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b>All: Gel-scram 3 Trail Runner</b></h4>
          <p>
            <?php echo substr("A sockliner which can be removed to accommodate a medical orthotic.", 0, 80), '...'; ?>
          </p>
          <a href='add_to_basket.php?var=19'><button class="btn success">BUY $ 100</button></a>
        </div>
      </div>
    </div>
<div class="box">
      <div class="card">
        <img src="resources/asics/Snickers_20.jpg" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b>All: Gel-Kahana 8 Trail Runner</b></h4>
          <p>
            <?php echo substr("Rearfoot and Forefoot GEL Cushioning Systems: Attenuates shock during impact and toe-off phases.", 0, 80), '...'; ?>
          </p>
          <a href='add_to_basket.php?var=20'><button class="btn success">BUY $ 100</button></a>
        </div>
      </div>
    </div>
<div class="box">
      <div class="card">
        <img src="resources/jordan/Snickers_21.jpg" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b>All: Air Jordan 1 Mid Basketball Shoe</b></h4>
          <p>
            <?php echo substr("Genuine leather, synthetic leather or textile upper depending on color.", 0, 80), '...'; ?>
          </p>
          <a href='add_to_basket.php?var=21'><button class="btn success">BUY $ 100</button></a>
        </div>
      </div>
    </div>
<div class="box">
      <div class="card">
        <img src="resources/jordan/Snickers_22.jpg" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b>All: Jordan Generation 23</b></h4>
          <p>
            <?php echo substr("Engineered textile and leather upper provides lightweight, breathable containment.", 0, 80), '...'; ?>
          </p>
          <a href='add_to_basket.php?var=22'><button class="btn success">BUY $ 100</button></a>
        </div>
      </div>
    </div>
<div class="box">
      <div class="card">
        <img src="resources/jordan/Snickers_23.jpg" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b>All: Fly Basketball Shoe</b></h4>
          <p>
            <?php echo substr("Shaft measures approximately Mid-Top. Lace-up style. Custom woven upper.", 0, 80), '...'; ?>
          </p>
          <a href='add_to_basket.php?var=23'><button class="btn success">BUY $ 100</button></a>
        </div>
      </div>
    </div>
<div class="box">
      <div class="card">
        <img src="resources/jordan/Snickers_24.jpg" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b>All: Air 1 Mid Basketball Shoe</b></h4>
          <p>
            <?php echo substr("An encapsulated Air sole unit for lightweight cushioning. Jordan Wings logo on the upper side.", 0, 80), '...'; ?>
          </p>
          <a href='add_to_basket.php?var=24'><button class="btn success">BUY $ 100</button></a>
        </div>
      </div>
    </div>
<div class="box">
      <div class="card">
        <img src="resources/jordan/Snickers_25.jpg" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b>All: Nike Mens Air Jordan</b></h4>
          <p>
            <?php echo substr("Genuine leather, synthetic leather or textile upper depending on color.", 0, 80), '...'; ?>
          </p>
          <a href='add_to_basket.php?var=25'><button class="btn success">BUY $ 100</button></a>
        </div>
      </div>
    </div>
  </div>
<div class="footer">
  <h2>© rkyslyy:sshiling 2018</h2>
</div>
</div>
</body>
</html>