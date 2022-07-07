<?php
include 'db.php';
if(isset($_POST['submit'])){
    $email_phone = $_POST['email/phone'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $query = "INSERT INTO Users ( 
        name, email/phone, password
        ) VALUES ($name, $email_phone, $password);";
        mysqli_query($con, $query);
        //then redirect to some page
};