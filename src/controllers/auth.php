<?php
include '../database/db.php';
include '../utils/validators.php';


if (isset($_POST['signup'])) {
    $email =  $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    // ?? checking the validty of email
    if(emailPresent($email)) {
        return "There is already a user with this email!";
    }
    else{
        if (validatePassword($password)){
            $query = "INSERT INTO Users (
                name, email, password
                ) VALUES ($name, $email, $password);";
                mysqli_query($con, $query);
    }
        //then redirect to login page
    }
}

if(isset($_POST['login'])){
    $email =  $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE email = '$email';";
    $result = mysqli_query($con, $query);
    $user = mysqli_fetch_assoc($result);

    if (emailPresent($email)) {
        if($user['password'] === $password){
            session_start();
            $_SESSION['id'] = $user['id'];
            // redirect to home page
        }
        else {
            echo "Incorrect password or email";
            //show error message
        }
    }
    else {
        echo "There is no user with this email";
    }
}

// http://localhost/auth.php?logout=true
if(isset($_GET['logout'])){
    if($_GET['logout'] == "true"){
        session_start();
        session_destroy();
        // redirect to login page        
    }
}