<?php
include '../databse/db.php';
include '../utils/validators.php';


$email = $_POST['email'];
$password = $_POST['password'];

if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    // ?? checking the validty of email
    if(emailPresent) {
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
};

if(isset($_POST['login'])){
    $query = "SELECT * FROM users WHERE email = '$email';";
    $result = mysqli_query($con, $query);
    $user = mysqli_fetch_assoc($result);

    if (emailPresent($email)) {
        if($user['password'] === $password){
            // redirect to home page
        }
        else {
            echo "Incorrect password or email";
            //show error message
        }
    }
    else {
        echo "There is no user eith this email";
    }
};
