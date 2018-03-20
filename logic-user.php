<?php

session_start();

function verifyUser() {
    if(!userIsLogged()){
        header("Location: index.php?failureSecurity=1");
        die();
    }
}

function userIsLogged() {
    return isset($_SESSION["user_logged"]);
}

function userLogged() {
    return $_SESSION["user_logged"];
}

function loginUser($email) {
    $_SESSION["user_logged"] = $email;
}

function logout() {
    session_destroy();
}