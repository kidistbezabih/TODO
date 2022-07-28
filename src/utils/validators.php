<?php
 /**
  * validatePassword check the password as it include letters and numbers
  * @password
  * Return: true if condition satisfied
  */
function validatPassword($password) {
    if(strlen($password) < 8){
        echo "Password must be greater than 8!";
        return false;
    }

    if(preg_match("/^\d*$/", $password)){
        echo "Password must have atleast 1 character";
        return false;
    }

    if(preg_match("/^[a-z]*$/i", $password)){
        echo "Password must contain numbers";
        return false;
    }

    if(!preg_match("/^[a-z0-9]*$/i", $password)){
        echo "Password can only contain numbers and letters";
        return false;
    }

    return true;
}

function emailPresent($email) {
    include_once "../database/db.php";
    $query = "SELECT * FROM users WHERE email=$email;";
    echo $query;

    try {
    $usersNum = mysqli_query($con, $query);
    } catch (mysqli_sql_exception $e) { 
        var_dump($e);
        exit; 
     } 
    if (mysqli_num_rows($usersNum) > 0) {
        return true;
    }
    return false;
}

