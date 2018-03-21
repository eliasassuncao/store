<?php
require_once("connection.php");

function listProducts($connection) {
    $products = [];
    $result = mysqli_query($connection, "select * from products");
    while($product = mysqli_fetch_assoc($result)){
        array_push($products, $product);
    }
    return $products;
}

function changeProduct($connection, $id, $name, $subname, $price, $imageLink, $description, $imageFile) {
    if (strlen($imageFile)){
        $query = "update products set name = '{$name}',subname = '{$subname}', price = {$price}, description = '{$description}', 
        imageFile = '{$imageFile}'
        where id = '{$id}' ";
    }else {
        $query = "update products set name = '{$name}',subname = '{$subname}', price = {$price}, description = '{$description}', 
        imagelink = '{$imageLink}'
        where id = '{$id}' ";
    }
    return mysqli_query($connection, $query);
}

function searchProduct($connection, $id) {
    $query = "select * from products where id = {$id}";
    $result = mysqli_query($connection, $query);
    return mysqli_fetch_assoc($result);
}

function insertProducts($connection, $name, $price, $imageLink, $description, $subname, $imageFile) {
    $query = "insert into products (name, price, imageLink, description, subname, imageFile) values 
    ('{$name}', '{$price}', '{$imageLink}', '{$description}', '{$subname}', '{$imageFile}') ";
    return mysqli_query($connection, $query);
}

function deleteProducts($connection, $id) {
    $query = "delete from products where id = '{$id}'";
    return mysqli_query($connection, $query);
}