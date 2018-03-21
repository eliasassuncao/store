<?php
require_once("database-users.php");
require_once("logic-user.php");

$email = $_POST['email'];
$password = $_POST['passwordUser'];
$user = searchUser($connection, $email, $password);
if($user == null) {
    $_SESSION["danger"] = "Usuário ou senha inválido.";
    header("Location: index.php");
}else{
    loginUser($user["email"]);
    header("Location: index.php");
}
