<?php
include '../database/db.php';
include '../utils/validators.php';
include '../utils/session.php';
include '../services/user.php';

if (isset($_POST['signup'])) {
    $email =  $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    
    if(emailPresent($email)) {
        return "There is already a user with this email!";
    }
    else{
        $user = createUser($name, $email, $password);
        setLoginSession($user['id']);
    }
}

if(isset($_POST['login'])){
    $email =  $_POST['email'];
    $password = $_POST['password'];
    $user = searchByEmail($email);
    if (emailPresent($user['email'])) {
        if($user['password'] === $password){
            setLoginSession($user['id']);
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
        destroyLoginSession();
        // redirect to login page        
    }
}