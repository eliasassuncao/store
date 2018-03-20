<?php 

function searchUser($connection, $email, $password) {
    $passwordMd5 = md5($password);
    $query = "select * from users where email = '{$email}' and passwordUser= '{$passwordMd5}'";
    $result = mysqli_query($connection, $query);
    $user = mysqli_fetch_assoc($result);
    return $user;
}