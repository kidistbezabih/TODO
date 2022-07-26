<?php

function setLoginSession($id){
    session_start();
    $_SESSION['id'] = $id;
}

function destroyLoginSession(){
    session_start();
    unset($_SESSION['id']);
}

function getLoginSession() {
    session_start();
    return $_SESSION['id'];
}