<?php require_once("header.php");
require_once("database-products.php");

    $id = $_POST['id'];
    $name = $_POST["name"];
    $subname = $_POST["subname"];
    $price = $_POST["price"];
    $imageLink = $_POST["imageLink"];
    $description = $_POST["description"];
    $imageFile = $_POST["imageFile"];

if(changeProduct($connection, $id, $name, $subname, $price, $imageLink, $description, $imageFile)) { ?>
    <p class="text-success" style="margin-top: 100px;">O PRODUTO <?= $name ?> FOI ALTERADO.</p>
<?php } else {
    $msg = mysqli_error($connection);
?>
    <p class="text-danger" style="margin-top: 100px;"> O PRODUTO <?= $name ?> NÃO FOI ALTERADO: <?= $msg ?> </p>
<?php } ?>

<?php include("footer.php"); ?>