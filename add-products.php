<?php require_once("header.php");
require_once("database-products.php");
require_once("logic-user.php");

verifyUser();

    $name = $_POST["name"];
    $subname = $_POST["subname"];
    $price = $_POST["price"];
    $imageLink = $_POST["imageLink"];
    $description = $_POST["description"];
    $imageFile = $_POST["imageFile"];

if(insertProducts($connection, $name, $price, $imageLink, $description, $subname, $imageFile)){  ?>
    <p class="text-success text-center" style="margin-top:100px;">PRODUTO <?= $name ?> ADICIONADO COM SUCESSO! </p>
<?php } else{
 $msg = mysqli_error($connection);
?>
    <p class="text-danger text-center" style="margin-top:100px;"> PRODUTO <?= $name ?> NÃO FOI ADICIONADO! <?= $msg ?></p>
<?php
}
mysqli_close($connection);
?>

<?php include("footer.php");