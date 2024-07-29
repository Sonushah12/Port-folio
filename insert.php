<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "portfolio";

$con = mysqli_connect($host, $user, $pass, $db);

if(!$con){
    die("Connection failed: ".mysqli_error());
}else {
    echo "Connected";
}

//get data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$description = $_POST['description'];

$sql = "INSERT INTO `user_master`( `name`, `email`, `description`) VALUES ('$name', '$email', '$description')";

if(mysqli_query($con, $sql)){
    echo "<script> alert('Data Inserted successfully')</script>";
}else{
    echo"Error:".mysqli_error($con);  //display error message if something goes wrong while inserting into database table
}




?>