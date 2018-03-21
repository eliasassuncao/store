<?php require_once("header.php");
require_once("database-products.php");
require_once("logic-user.php");

$id = $_POST['id'];
deleteProducts($connection, $id);
$_SESSION["success"] = "Produto removido com sucesso!";
header("Location: admin-products.php");
die();
?>