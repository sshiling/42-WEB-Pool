<?php

// CREATE SHOP DATA BASE
$servername = "localhost";
$username = "root";
$password = "BloodyPastor";
$db = "shop_db";

if ($conn = mysqli_connect($servername, $username, $password, $db)) {
    mysqli_close($conn);
    exit;
}

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE shop_db";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);
$conn = mysqli_connect($servername, $username, $password, $db);

// CREATE USERS TABLE
// sql to create table
$sql = "CREATE TABLE users (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
login VARCHAR(30) NOT NULL, # add check if unique
passwd VARCHAR(128) NOT NULL,
fname VARCHAR(30) NOT NULL,
lname VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
reg_date INT(11) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table users created successfully<br>";
} else {
    echo "Error creating table users: " . mysqli_error($conn);
}

// CREATE ITEMS TABLE
// sql to create table
$sql = "CREATE TABLE items (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(80) NOT NULL, # add check if unique
description VARCHAR(200) NOT NULL,
price INT(11) NOT NULL,
img VARCHAR(200) NOT NULL,
category VARCHAR(50)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table items created successfully<br>";
} else {
    echo "Error creating table items: " . mysqli_error($conn);
}

// CREATE ORDERS TABLE
// sql to create table
$sql = "CREATE TABLE orders (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
login VARCHAR(30) NOT NULL, # add check if unique
item_id INT(11) NOT NULL, 
quantity INT(11) NOT NULL,
reg_date INT(11) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table orders created successfully<br>";
} else {
    echo "Error creating table orders: " . mysqli_error($conn);
}

// CREATE CATEGORIES TABLE
// sql to create table
$sql = "CREATE TABLE categories (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
category VARCHAR(30) NOT NULL # add check if unique
)";

if (mysqli_query($conn, $sql)) {
    echo "Table categories created successfully<br>";
} else {
    echo "Error creating table categories: " . mysqli_error($conn);
}

// CREATE CATEGORIES
$sql = "INSERT INTO shop_db.categories (category)
VALUES ('All'), ('Adidas'), ('Asics'), ('Jordan'), ('New Balance'), ('Nike')";
if (mysqli_query($conn, $sql)) {
    echo "New categories created successfully<br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . mysqli_error($conn);
}

// CREATE ADMIN
$sql = "INSERT INTO shop_db.users (login, passwd, fname, lname, email, reg_date)
VALUES ('admin', '".hash("whirlpool","123456")."', 'Sergii', 'Shilingov', 's.shilingov@gmail.com', '".time()."')";

if (mysqli_query($conn, $sql)) {
    echo "New admin created successfully<br>";
} else {
    echo "<br>Error: " . $sql . "<br>" . mysqli_error($conn);
}

// CREATE ITEMS
$sql = "INSERT INTO items (title, description, price, img, category)
VALUES ('Men High Ankle Soccer Shoes', 'Adidas Primeknit upper wraps the foot in adaptive support and ultralight comfort PURECUT offers a sleek compression fit.', '100', 'resources/adidas/Snickers_1.jpg', 'Adidas'),
('Rockadia Trail m Running Shoe', 'PRIMEMESH upper provides a comfortable, sock-like fit so you can move with instinct to control the ball at high speed.', '100', 'resources/adidas/Snickers_2.jpg', 'Adidas'),
('DEERUPT RUNNER SHOES', 'Deerupt is proof that minimalism can be bold. These shoes have an ultra-flexible mesh upper covered in a layer of stretch grid webbing.', '100', 'resources/adidas/Snickers_3.jpg', 'Adidas'),
('Tubular Shadow Running Shoe', 'Shaft measures approximately low-top from arch. Cloudfoam cushioning. Flexible comfort feel.', '100', 'resources/adidas/Snickers_4.jpg', 'Adidas'),
('Swift Running Shoe', 'Lace-up skate shoe with smooth abrasion-resistant upper featuring signature 3-Stripes logoing and wraparound midsole.', '100', 'resources/adidas/Snickers_5.jpg', 'Adidas'),
('NIKE Mens Lunarepic Low Flyknit', 'Premium kangaroo leather for stability, traction and good balance for better ball control.', '100', 'Resources/nike/Snickers_6.jpg', 'Nike'),
('Nike Flex Contact Running Shoe', 'Adaptive Shield technology to provide uniform surface with shape correcting foam for shooting accuracy and ball spin.', '100', 'resources/nike/Snickers_7.jpg', 'Nike'),
('Air Max Tavas Running Shoes', 'Rippy rubber sole with waffle pattern for increased traction. Suitable for party, sports, indoor, outdoor', '100', 'resources/nike/Snickers_8.jpg', 'Nike'),
('Men Fashion Breathable Sneakers', 'High elastic MD outsole,slip resistant,easy to manage any area. Casual and trend.', '100', 'resources/nike/Snickers_9.jpg', 'Nike'),
('Air Max Flair Mesh Trainers', 'Removable, textile lined and foam padded insole for cushioning and support.', '100', 'resources/nike/Snickers_10.jpg', 'Nike'),
('Fresh Foam Cruz Running Shoe', 'Shaft measures approximately low-top from arch. Molded Foam comfort insert.', '100', 'resources/new_balance/Snickers_11.jpg', 'New Balance'),
('Trail Running Shoe', 'AT tread outsole. PU Sockliner. Injection molded EVA. All references to 12 mm drop are approximate.', '100', 'resources/new_balance/Snickers_12.jpg', 'New Balance'),
('MX608v4 Training Shoe', 'Training shoe with 100% Leather upper featuring dual-density collar.', '100', 'resources/new_balance/Snickers_13.jpg', 'New Balance'),
('515V1 Sneaker', 'Shaft measures approximately low-top from arch. EVA midsole and heel.', '100', 'resources/new_balance/Snickers_14.jpg', 'New Balance'),
('M420v3 Running Shoe', 'New Balance, is dedicated to helping athletes achieve their goals.', '100', 'resources/new_balance/Snickers_15.jpg', 'New Balance'),
('Gel-Venture 6 Running Shoe', 'Rear foot GEL Cushioning System: Attenuates shock during impact phase and allows for a smooth transition to midstance.', '100', 'resources/asics/Snickers_16.jpg', 'Asics'),
('Gel-Venture 5 Running Shoe', 'Outdoor-ready runner with mesh and brushstroke-patterned underlays.', '100', 'resources/asics/Snickers_17.jpg', 'Asics'),
('Gel-Contend 4 Running Shoe', 'Rearfoot GEL Cushioning System: Attenuates shock during impact phase and allows for a smooth transition to midstance.', '100', 'resources/asics/Snickers_18.jpg', 'Asics'),
('Gel-scram 3 Trail Runner', 'A sockliner which can be removed to accommodate a medical orthotic.', '100', 'resources/asics/Snickers_19.jpg', 'Asics'),
('Gel-Kahana 8 Trail Runner', 'Rearfoot and Forefoot GEL Cushioning Systems: Attenuates shock during impact and toe-off phases.', '100', 'resources/asics/Snickers_20.jpg', 'Asics'),
('Air Jordan 1 Mid Basketball Shoe', 'Genuine leather, synthetic leather or textile upper depending on color.', '100', 'resources/jordan/Snickers_21.jpg', 'Jordan'),
('Jordan Generation 23', 'Engineered textile and leather upper provides lightweight, breathable containment.', '100', 'resources/jordan/Snickers_22.jpg', 'Jordan'),
('Fly Basketball Shoe', 'Shaft measures approximately Mid-Top. Lace-up style. Custom woven upper.', '100', 'resources/jordan/Snickers_23.jpg', 'Jordan'),
('Air 1 Mid Basketball Shoe', 'An encapsulated Air sole unit for lightweight cushioning. Jordan Wings logo on the upper side.', '100', 'resources/jordan/Snickers_24.jpg', 'Jordan'),
('Nike Mens Air Jordan', 'Genuine leather, synthetic leather or textile upper depending on color.', '100', 'resources/jordan/Snickers_25.jpg', 'Jordan')
";

if (mysqli_query($conn, $sql)) {
    echo "Items created successfully";
} else {
    echo "<br>Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>