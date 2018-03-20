<?php include("connection.php");
include("database-users.php");
include("logic-user.php");

$email = $_POST['email'];
$password = $_POST['passwordUser'];
$user = searchUser($connection, $email, $password);
if($user == null) {
    header("Location: index.php?login=0");
}else{
    loginUser($user["email"]);
    header("Location: index.php?login=1");
}
