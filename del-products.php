<?php include("header.php");
include("connection.php");
include("database-products.php");

$id = $_POST['id'];
deleteProducts($connection, $id);
header("Location: admin-products.php?remove=true");
die();
?>