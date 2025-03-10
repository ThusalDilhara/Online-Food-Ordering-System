<?php
$servername = "localhost";
$username = "root";
$dbname = "KelaniFoods_db";

// Create connection
$con = mysqli_connect($servername, $username);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database if it doesn't exist
if (!mysqli_query($con, "CREATE DATABASE IF NOT EXISTS $dbname")) {
    die("Error creating database: " . mysqli_error($con));
}

// Select the database
mysqli_select_db($con, $dbname);


$table_sql = "CREATE TABLE IF NOT EXISTS Contact (
   id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(15),
    email VARCHAR(25),
    gender VARCHAR(15),
    description VARCHAR(100)
)";

if (!mysqli_query($con, $table_sql)) {
    die("Error creating table: " . mysqli_error($con));
}

$table_sql = "CREATE TABLE IF NOT EXISTS orders (
   id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(15),
  number VARCHAR(15),
  order_item VARCHAR(20),
  AdditionalFood VARCHAR(20),
  quantity Integer,
  OrderDate date,
  Address Varchar(100),
  Message Varchar(100)
)";

if (!mysqli_query($con, $table_sql)) {
  die("Error creating table: " . mysqli_error($con));
}

$table_sql="CREATE TABLE IF NOT EXISTS Cart (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50),
  price Integer(10),
  quantity INT
 
)";

if (!mysqli_query($con, $table_sql)) {
  die("Error creating table: " . mysqli_error($con));
}


$table_sql="CREATE TABLE IF NOT EXISTS Feedback (
  id INT AUTO_INCREMENT PRIMARY KEY,
  fname VARCHAR(15),
  lname VARCHAR(15),
  email varchar(20),
  phone varchar(10),
  visitedDate Date,
  feedback varchar(100),
  orderNumber varchar(10)
 
)";

if (!mysqli_query($con, $table_sql)) {
  die("Error creating table: " . mysqli_error($con));
}

$table_sql="CREATE TABLE IF NOT EXISTS Customers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(25),
  address Varchar(30),
  email varchar(20),
  password varchar(20)
)";

if (!mysqli_query($con, $table_sql)) {
  die("Error creating table: " . mysqli_error($con));
}


?>
