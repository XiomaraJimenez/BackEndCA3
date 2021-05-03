<?php

include 'library/DBConnection.php';

$error=[];

// https://www.php.net/manual/en/function.filter-input.php
// https://www.php.net/manual/en/filter.filters.php

//sanitizing is removing anything not adhering to the filter
//filter_input (TYPE OF INPUT, INPUT NAME , FILTER NAME/TYPE - see on PHP.net)
$name = filter_input(INPUT_POST, 'name',  FILTER_SANITIZE_STRING);
$country = filter_input(INPUT_POST, 'country',  FILTER_SANITIZE_STRING);
$type = filter_input(INPUT_POST, 'type',  FILTER_SANITIZE_STRING);
$cost = filter_input(INPUT_POST, 'cost',  FILTER_SANITIZE_NUMBER_INT);
$year_date = filter_input(INPUT_POST, 'year',  FILTER_SANITIZE_URL);

//make input required
//checks to see if the $name is set (should be) or if it is empty
//if it is initialize the error array with a message
if(!isset($name) || empty($name)){
        $error['name'] = 'Wine name is required';
}
if(!isset($country) || empty($country)){
        $error['country'] = 'country name is required';
}
if(!isset($type) || empty($type)){
        $error['date'] = 'date name is required';
}
if(!isset($cost) || empty($cost) ){
        $error['cost'] = 'cost is required';
}
if(!isset($year) || empty($year)){
        $error['year'] = 'year is required';
}

//if there are no errors and error array is empty
//send to database
if(empty($error)){
        //prepare and bind
        //everything has to be the exact same as it is in the database
        $sql = "INSERT INTO wine (name, country, type, cost, year) 
        VALUES (?,?,?,?,?)";

        //prepared statement
        $stmt = $conn->prepare($sql);

        //the variables are at your own choice, 
        //they do not require to be the exact same as the columns in the database
        $stmt->bind_param("sssss", $name, $country, $type, $cost, $year);

        //send to database
        $stmt->execute();
        $conn->close();

        header("Location: index.php");
}else{ 
        //if there are errors draw the NewWine.php page
        //drawing the page rather than redirecting will let us
        //acces the $error array and all the variables set at the
        //top of the page
        require_once('NewWine.php');
}




?>