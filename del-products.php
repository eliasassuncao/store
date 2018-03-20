<?php include("header.php");
include("connection.php");
include("database-products.php");
include("logic-user.php");

$id = $_POST['id'];
deleteProducts($connection, $id);
$_SESSION["success"] = "Produto removido com sucesso!";
header("Location: admin-products.php");
die();
?>