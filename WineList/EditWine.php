<?php
//connect to the database
include 'library/DBConnection.php';

//set up the sql string with prepared statements
$sql = "UPDATE Wine 
        SET name=?, 
            country=?, 
            type=?, 
            cost=?, 
            year=? 
        WHERE id=?";


$stmt = $conn->prepare($sql);

//the variables are at your own choice, 
//they do not require to be the exact same as the columns in the database
$stmt->bind_param("sssssi", $name, 
$country, $type, $cost, 
$year_date, $id);

//set up the variables
$id = $_POST["id"];
$name = $_POST["name"];
$country = $_POST["country"];
$type = $_POST["type"];
$cost = $_POST["cost"];
$year_date = $_POST["year_date"];

//execute the statement
$stmt->execute();
//close the connection
$conn->close();
//redirect back to index page
header("Location: index.php");


?>