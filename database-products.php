<?php

function listProducts($connection) {
    $products = [];
    $result = mysqli_query($connection, "select * from products");
    while($product = mysqli_fetch_assoc($result)){
        array_push($products, $product);
    }
    return $products;
}

function insertProducts($connection, $name, $price, $imageLink, $description, $subname, $imageFile) {
    $query = "insert into products (name, price, imageLink, description, subname, imageFile) values 
    ('{$name}', '{$price}', '{$imageLink}', '{$description}', '{$subname}', '{$imageFile}') ";
    echo $query;
    return mysqli_query($connection, $query);
}

function deleteProducts($connection, $id) {
    $query = "delete from products where id = '{$id}'";
    return mysqli_query($connection, $query);
}