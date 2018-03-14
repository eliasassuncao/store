<?php

function listProducts($connection) {
    $products = [];
    $result = mysqli_query($connection, "select * from products");
    while($product = mysqli_fetch_assoc($result)){
        array_push($products, $product);
    }
    return $products;
}

function insertProducts($connection, $name, $price, $image, $description, $subname) {
    $query = "insert into products (name, price, image, description, subname) values 
    ('{$name}', '{$price}', '{$image}', '{$description}', '{$subname}') ";
    return mysqli_query($connection, $query);
}