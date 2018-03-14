<?php include("header.php");
include("connection.php");
include("database-products.php");

    $name = $_POST["name"];
    $subname = $_POST["subname"];
    $price = $_POST["price"];
    $image = $_POST["image"];
    $description = $_POST["description"];
if(insertProducts($connection, $name, $price, $image, $description, $subname)){  ?>
    <p class="text-success">PRODUTO <?= $name ?> ADICIONADO COM SUCESSO! </p>
<?php } else{
 $msg = mysqli_error($connection);
?>
    <p class="text-danger"> PRODUTO <?= $name ?> NÃO FOI ADICIONADO! <?= $msg ?></p>
<?php
}
mysqli_close($connection);
?>

<?php include("footer.php");