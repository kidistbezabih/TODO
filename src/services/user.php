<?php
include '../database/db.php';
include '../utils/session.php';

function createUser($name, $email, $password,) {
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
    $query = "SELECT * FROM WHERE id = '$id';";
    $result = mysqli_query($query, $con);
    $user = mysli_fetch_assoc($result)
    return $user;
}
 
function searchByEmail($email){
    $query = "SELECT * FROM users WHERE email = '$email';";
    $result = mysqli_query($con, $query);
    $user = mysqli_fetch_assoc($result);
    return $user;
}

function updateUsersName($id, $newName) {
    $query = "UPDATE users SET name =  '$newName' WHERE id = '$id';";
    mysqli_query($query, $con);
    // return $newName;
}

function updateUserEmail($id, $newEmail) {
    $query = "UPDATE users SET name =  '$newEmail' WHERE id = '$id';";
    mysqli_query($query, $con);
    // return $newEmail;+
}

function updateUserPassword($id, $newPassword) {
    $query = "UPDATE users SET name =  '$newPassword' WHERE id = '$id';";
    mysqli_query($query, $con);
}

function deleteUser($id) {
    $query = "DELETE FROM users WHERE id = '$id';";
    mysqli_query($query, $con);
}
