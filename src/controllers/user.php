<?php
include '../databse/db.php';
include '../services/user.php';
include '../utils/validators.php';
include '../utils/session.php';


function changeExistingEmail($newEmail) {
    if (!emailPresent($newEmail)) {
        //and after verifying the email
        updateUserEmail($id, $newEmail)
    }
    else {
        echo "There is already a user with this email!";
    }
}

function correctCurrentPassword($Password) {
    $currentPassword = searchById['password'];
    if ($currentPassword === $password){
        return true;
    }
    else {
        echo 'Incorrect password!';
    }
}

function changeExistingPassword($newPassword) {
    if (validatePassword($newPassword)) {
        return $newPassword;
    }
}

function confirmPassword($conformPassword) {
    $newPassword =  changeExistingPassword($newPassword);
    if (correctCurrentPassword) {
        if ($confirmPassword === $newPassword) {
            updateUserPassword($id, $newPassword);
        }
        else {
            echo "Password is not matched!";
        }
    }
}
