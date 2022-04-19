<?php
$servername = "localhost";
$username = "root";
$password = "Amaali0707";

try{

//Create database
$conn = new PDO ("mysql:host=$servername;dbname=cpit-405",$username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// $sql = "CREATE DATABASE cpit_405";

// $conn->exec($sql);

//create user table
// $sql = "CREATE TABLE `customer` (
//     `Name` varchar(50) NOT NULL,
//     `Email` varchar(50) NOT NULL,
//     `Password` varchar(50) NOT NULL,
//     `phoneNumber` varchar(50) NOT NULL,
//     `Gender` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
//     `City` varchar(50) NOT NULL,
//     `address` varchar(50) NOT NULL,
//     PRIMARY KEY (`phoneNumber`)
//   ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci";

// $conn->exec($sql);

// $sql = "CREATE TABLE `menu` (
//   `pizzaName` varchar(50) NOT NULL,
//   `desc` varchar(50) NOT NULL,
//   `price` numeric(10) NOT NULL,
//   PRIMARY KEY (`pizzaName`)
// )";

// $conn->exec($sql);


$insertQ = "INSERT INTO `menu` (`pizzaName`, `desc`, `price`) VALUES ('Margherita','A Rich Layer of Real Mozzarella.......................................', 20)";
$conn->exec($insertQ);
$insertQ = "INSERT INTO `menu` (`pizzaName`, `desc`, `price`) VALUES ('Veggie','Green Peppers, Onions, Mushrooms..........................................', 20)";
$conn->exec($insertQ);
$insertQ = "INSERT INTO `menu` (`pizzaName`, `desc`, `price`) VALUES ('BBQ Chicken','Grilled Chicken breast, Onions..............................................', 25)";
$conn->exec($insertQ);
$insertQ = "INSERT INTO `menu` (`pizzaName`, `desc`, `price`) VALUES ('Chicken Legend Ranch & Jalapenos','Mozzarella, American cheese,Ranch Sauce....................................................', 25)";
$conn->exec($insertQ);
$insertQ = "INSERT INTO `menu` (`pizzaName`, `desc`, `price`) VALUES ('Pepperoni','Beef Pepperoni ..........................................................', 20)";
$conn->exec($insertQ);
$insertQ = "INSERT INTO `menu` (`pizzaName`, `desc`, `price`) VALUES ('Dynamite Chicken','Baked Chicken breast...........................', 30)";
$conn->exec($insertQ);
$insertQ = "INSERT INTO `menu` (`pizzaName`, `desc`, `price`) VALUES ('Italiano','Italian Sausage, Mozzarella.........................................', 30)";
$conn->exec($insertQ);
$insertQ = "INSERT INTO `menu` (`pizzaName`, `desc`, `price`) VALUES ('Philly Cheese Steak','Slices of Beef Steak..............................', 30)";   
$conn->exec($insertQ);

// create workshop table
  

} catch(PDOException $e) {
  echo $insertQ . "<br>" . $e->getMessage();
}


?>
  

