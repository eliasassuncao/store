<?php

session_start();

function verifyUser() {
    if(!userIsLogged()){
        $_SESSION["danger"] = "Você não tem acesso a esta funcionalidade.";
        header("Location: index.php");
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
    session_start();
}