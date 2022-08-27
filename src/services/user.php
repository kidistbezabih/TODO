<?php
include_once "../database/db.php";
include_once '../utils/session.php';

function createUser($name, $email, $password) {
    global $con;
    $query = "INSERT INTO Users (
        name, email, password
        ) VALUES ($name, $email, $password);";
    mysqli_query($con, $query);
    $sql = "SELECT * FROM users WHERE email = '$email';";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);
    return $user;
}

function searchById($id) {
    global $con;
    $query = "SELECT * FROM WHERE id = '$id';";
    $result = mysqli_query($con, $query);
    $user = mysqli_fetch_assoc($result);
    return $user;
}
 
function searchByEmail($email){
    global $con;
    $query = "SELECT * FROM users WHERE email=$email;";
    echo ' '.$query;
    $result = mysqli_query($con, $query);
    $user = mysqli_fetch_assoc($result);
    return $user;
}

function updateUsersName($id, $newName) {
    global $con;
    $query = "UPDATE users SET name=$newName WHERE id=$id;";
    $result = mysqli_query($con, $query);
    // return $newName;
}

function updateUserEmail($id, $newEmail) {
    global $con;
    $query = "UPDATE users SET name =  '$newEmail' WHERE id = '$id';";
    mysqli_query($con, $query);
    // return $newEmail;
}

function updateUserPassword($id, $newPassword) {
    global $con;
    $query = "UPDATE users SET name =  '$newPassword' WHERE id = '$id';";
    mysqli_query($con, $query);
}

function deleteUser($id) {
    global $con;
    $query = "DELETE FROM users WHERE id = '$id';";
    mysqli_query($con, $query);
}
