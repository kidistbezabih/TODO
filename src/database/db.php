<?php
$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "Todo";

$con = mysqli_connect(
    $dbServerName, 
    $dbUserName, 
    $dbPassword, 
    $dbName
);
if ($con->connect_error) {
    die ("connection failed : ". $con->connect_error);
}else {
    echo "connected sucessfully";
}