<?php
include '../databse/db.php';
include '../services/user.php';
include '../utils/validators.php';
include '../utils/session.php';


if (isset($_PUT['change_password'])) {
    $user_id = getLoginSession();
    $old_password = $_PUT['old_password'];
    $new_password = $_PUT['new_password'];
    $confirm_password = $_PUT['confirm_password'];

    // check the validity of the passsword

    $user = searchById($user_id);
    if ($old_password === $user['password']) {
        if (validatPassword($new_password)) {
            if ($new_password  === $confirm_password) {
                updateUserPassword($id, $new_password)
            } else
            // error message [unmatched password]
        } else
        // error message [on validate password]
    } else
    // error message [password is not matched with old password]
}

if (isset($_PUT['changeExistingEmail'])) {
    if (!emailPresent($newEmail)) {
        //and after verifying the email
        updateUserEmail($id, $newEmail)
    }
    else {
        echo "There is already a user with this email!";
    }
}
